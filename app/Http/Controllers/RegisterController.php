<?php

namespace App\Http\Controllers;

use App\Jobs\SendWhatsAppDaftar;
use App\Jobs\SendWhatsAppResetPassword;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Agency;
use App\Models\Affiliate;
use Laratrust\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    //

    public function login(Request $request)
    {
        \Illuminate\Support\Facades\Log::info('Auth status: ', ['member_auth' => Auth::guard('member')->check()]);

        // Regenerate session jika ada indikasi baru logout
        if ($request->session()->has('just_logged_out')) {
            $request->session()->forget('just_logged_out');
            return view('pages.register.login');
        }

        if (Auth::guard('member')->check()) {
            return redirect()->route('beranda');
        }

        return view('pages.register.login');
    }

    public function loginStore(Request $request): RedirectResponse
    {
        $request->validate([
            'telepon' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::guard('member')->attempt($request->only('telepon', 'password'), $request->boolean('remember'))) {
            $request->session()->regenerate();

            // Ambil user yang sedang login
            $user = Auth::guard('member')->user();

            // Cek apakah user memiliki role "member"
            if (!$user->hasRole('member')) {
                Auth::guard('member')->logout(); // Logout user jika tidak memiliki role
                Alert::toast('Akun Anda tidak memiliki akses.', 'error')->autoClose(10000)->timerProgressBar();
                return back();
            }

            return redirect()->intended(RouteServiceProvider::HOME);
        }

        Alert::toast('Nomor telepon atau password anda salah.', 'error')->autoClose(10000)->timerProgressBar();
        return back()->withInput();
    }


    public function daftar()
    {
        return view('pages.register.daftar', [
            'referral_code' => null,
            'agency_name' => null,
            'is_referral' => false
        ]);
    }


    /**
     * Tampilkan form registrasi dengan referral dari slug
     */
    public function daftarWithReff($slug)
    {
        // Cari agency berdasarkan slug
        $agency = Agency::where('slug', strtolower($slug))
            ->where('status', 'active')
            ->first();

        if (!$agency) {
            // Jika slug tidak valid, redirect ke form registrasi biasa
            return redirect()->route('daftar')
                ->with('error', 'Link referral tidak valid atau sudah tidak aktif.');
        }

        return view('pages.register.daftar', [
            'referral_code' => $agency->agency_code, // Gunakan agency_code untuk form
            'agency_name' => $agency->nama,
            'is_referral' => true,
            'referral_link' => $slug
        ]);
    }


    public function storeRegister(Request $request)
    {
        try {
            // Mulai transaksi
            DB::beginTransaction();

            // Validasi input data
            $request->validate([
                'sapaan' => ['required', 'in:Pak,Bu,Bang,Kak'],
                'nama' => ['required', 'string', 'max:255'],
                'telepon' => ['required', 'string', 'max:15', 'unique:members,telepon', 'regex:/^08[0-9]{8,13}$/'],
                'referral_code' => ['nullable', 'string', 'exists:agency,agency_code'],
            ], [
                'sapaan.required' => 'Sapaan harus dipilih',
                'nama.required' => 'Nama harus diisi',
                'telepon.required' => 'Nomor WhatsApp harus diisi',
                'telepon.unique' => 'Nomor WhatsApp sudah terdaftar',
                'referral_code.exists' => 'Kode referral tidak valid',
            ]);

            // Generate recovery code dan password sementara
            $rd = random_int(10000, 99999);

            // Buat member baru
            $member = Member::create([
                'sapaan' => $request->sapaan,
                'nama' => $request->nama,
                'telepon' => $request->telepon,
                'password' => Hash::make($rd),
                'recovery_code' => $rd,
            ]);

            // Menambahkan role konsumen
            $memberRole = Role::where('name', 'member')->first();
            $member->addRole($memberRole);

            // Proses referral jika ada
            if ($request->filled('referral_code')) {
                $agency = Agency::whereRaw('BINARY agency_code = ?', [$request->referral_code])
                    ->where('status', 'active')
                    ->first();

                if ($agency) {
                    // Buat record affiliate
                    Affiliate::create([
                        'member_id' => $member->id,
                        'agency_id' => $agency->id,
                        'joined_at' => now(),
                    ]);

                    // Log untuk tracking
                    Log::info('New affiliate member registered', [
                        'member_id' => $member->id,
                        'agency_id' => $agency->id,
                        'referral_code' => $request->referral_code,
                    ]);
                } else {
                    // Jika referral code tidak valid
                    DB::rollBack();
                    Alert::toast('Kode referral tidak valid.', 'error')
                        ->autoClose(10000)
                        ->timerProgressBar();
                    return redirect()->back()->withInput();
                }
            }

            // Commit transaksi
            DB::commit();

            // Dispatch job untuk mengirim pesan WhatsApp
            SendWhatsAppDaftar::dispatch($member);

            $message = 'Akun anda berhasil dibuat, silahkan cek WhatsApp untuk melihat password anda.';
            return redirect()->route('login')->with('success', $message);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Rollback jika validasi gagal
            DB::rollBack();

            $errors = $e->validator->errors()->all();
            foreach ($errors as $error) {
                Alert::toast($error, 'error')->autoClose(10000)->timerProgressBar();
            }

            return back()->withInput();
        } catch (\Exception $e) {
            // Rollback jika terjadi kesalahan lain
            DB::rollBack();

            Log::error('Registration error: ' . $e->getMessage());
            Alert::toast('Terjadi kesalahan pada sistem.', 'error')->autoClose(10000)->timerProgressBar();
            return back()->withInput();
        }
    }

    public function lupapassword()
    {
        return view('pages.register.lupa-password');
    }

    public function resetpassword(Request $request)
    {
        try {
            $member = Member::where('telepon', $request->telepon)->first();

            if ($member === null) {
                Alert::toast('Opss....!, Nomor tidak ditemukan atau belum terdaftar. Silahkan cek kembali.', 'error')->autoClose(10000)->timerProgressBar();
                return redirect()->route('lupapassword');
            } else {
                $item = Member::where('telepon', $request->telepon)->firstOrFail();
                $rd = random_int(10000, 99999);

                $item->password = Hash::make($rd);
                $item->recovery_code = $rd;
                $item->save();

                SendWhatsAppResetPassword::dispatch($member);

                Alert::toast('Password berhasil diubah, silahkan cek WhatsApp kamu', 'success')->autoClose(10000)->timerProgressBar();
                return redirect()->route('login');
            }
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan pada sistem.', 'error')->autoClose(10000)->timerProgressBar();
            return back()->withInput();
        }
    }
}
