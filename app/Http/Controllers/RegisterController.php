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
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class RegisterController extends Controller
{
    //

    public function login(Request $request)
    {
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
            'telepon'  => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        try {
            $credentials = $request->only('telepon', 'password');
            $remember    = $request->boolean('remember');

            if (! Auth::guard('member')->attempt($credentials, $remember)) {
                return back()
                    ->withInput($request->only('telepon'))
                    ->withErrors(['telepon' => 'Nomor WhatsApp atau password Anda salah.']);
            }

            $request->session()->regenerate();

            $member = Auth::guard('member')->user();

            if (! $member->hasRole('member')) {
                Auth::guard('member')->logout();
                Alert::toast('Akun Anda tidak memiliki akses.', 'error')
                    ->autoClose(10000)
                    ->timerProgressBar();
                return back()->withInput($request->only('telepon'));
            }

            return redirect()->intended(RouteServiceProvider::HOME);
        } catch (\Exception $e) {
            Log::error('Login error: ' . $e->getMessage());
            Alert::toast('Terjadi kesalahan pada sistem.', 'error')
                ->autoClose(10000)
                ->timerProgressBar();
            return back()->withInput($request->only('telepon'));
        }
    }

    public function daftar(Request $request)
    {
        $googlePending = null;

        if ($request->session()->has('google_pending')) {
            $data = session('google_pending');

            if (now()->timestamp <= $data['expired_at']) {
                $googlePending = $data;
            } else {
                session()->forget('google_pending');
            }
        }

        return view('pages.register.daftar', [
            'referral_code'  => null,
            'agency_name'    => null,
            'is_referral'    => false,
            'google_pending' => $googlePending,
        ]);
    }

    public function daftarWithReff($slug)
    {
        $agency = Agency::where('slug', strtolower($slug))
            ->where('status', 'active')
            ->first();

        if (! $agency) {
            return redirect()->route('daftar')
                ->with('error', 'Link referral tidak valid atau sudah tidak aktif.');
        }

        return view('pages.register.daftar', [
            'referral_code'  => $agency->agency_code,
            'agency_name'    => $agency->nama,
            'is_referral'    => true,
            'referral_link'  => $slug,
            'google_pending' => null,
        ]);
    }

    public function storeRegister(Request $request)
    {
        $request->validate([
            'sapaan'        => ['required', 'in:Pak,Bu,Bang,Kak'],
            'nama'          => ['required', 'string', 'max:255'],
            'telepon'       => ['required', 'string', 'max:15', 'unique:members,telepon', 'regex:/^08[0-9]{8,13}$/'],
            'email'         => ['nullable', 'email', 'unique:members,email'],
            'referral_code' => ['nullable', 'string', 'exists:agency,agency_code'],
        ], [
            'sapaan.required'      => 'Sapaan wajib dipilih.',
            'sapaan.in'            => 'Sapaan tidak valid.',
            'nama.required'        => 'Nama wajib diisi.',
            'nama.max'             => 'Nama maksimal 255 karakter.',
            'telepon.required'     => 'Nomor WhatsApp wajib diisi.',
            'telepon.max'          => 'Nomor WhatsApp maksimal 15 digit.',
            'telepon.unique'       => 'Nomor WhatsApp sudah terdaftar.',
            'telepon.regex'        => 'Format nomor WhatsApp tidak valid. Harus diawali 08.',
            'email.email'          => 'Format email tidak valid.',
            'email.unique'         => 'Email sudah terdaftar.',
            'referral_code.exists' => 'Kode referral tidak valid.',
        ]);

        // Ambil google_pending dari session jika ada
        $googlePending = session('google_pending');

        // Jika dari Google, pastikan session belum expired
        if ($googlePending && now()->timestamp > $googlePending['expired_at']) {
            session()->forget('google_pending');
            Alert::toast('Sesi Google sudah habis. Silakan ulangi login Google.', 'warning')
                ->autoClose(8000)
                ->timerProgressBar();
            return redirect()->route('login');
        }

        try {
            DB::beginTransaction();

            $rd = random_int(10000, 99999);

            if ($googlePending) {
                $email           = $googlePending['email'];
                $emailVerifiedAt = now();
                $thumbnail       = $googlePending['avatar'] ?? null;
            } elseif ($request->filled('email')) {
                $email           = $request->email;
                $emailVerifiedAt = null;
                $thumbnail       = null;
            } else {
                $email           = null;
                $emailVerifiedAt = null;
                $thumbnail       = null;
            }

            $member = Member::create([
                'sapaan'            => $request->sapaan,
                'nama'              => $request->nama,
                'telepon'           => $request->telepon,
                'email'             => $email,
                'email_verified_at' => $emailVerifiedAt,
                'thumbnail'         => $thumbnail,
                'password'          => Hash::make($rd),
                'recovery_code'     => $rd,
            ]);

            $memberRole = Role::where('name', 'member')->first();
            $member->addRole($memberRole);

            if ($googlePending) {
                $member->providers()->create([
                    'provider'       => 'google',
                    'provider_id'    => $googlePending['google_id'],
                    'provider_token' => $googlePending['token'],
                ]);
            }

            if ($request->filled('referral_code')) {
                $agency = Agency::whereRaw('BINARY agency_code = ?', [$request->referral_code])
                    ->where('status', 'active')
                    ->first();

                if ($agency) {
                    Affiliate::create([
                        'member_id' => $member->id,
                        'agency_id' => $agency->id,
                        'joined_at' => now(),
                    ]);
                } else {
                    DB::rollBack();
                    Alert::toast('Kode referral tidak valid atau tidak aktif.', 'error')
                        ->autoClose(10000)
                        ->timerProgressBar();
                    return redirect()->back()->withInput();
                }
            }

            DB::commit();

            session()->forget('google_pending');

            SendWhatsAppDaftar::dispatch($member);

            if ($googlePending) {
                Auth::guard('member')->login($member);
                Alert::toast('Akun berhasil dibuat dan terhubung dengan Google!', 'success')
                    ->autoClose(6000)
                    ->timerProgressBar();
                return redirect()->route('beranda');
            }

            return redirect()->route('login')
                ->with('success', 'Akun Anda berhasil dibuat. Silahkan cek WhatsApp untuk melihat password Anda.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Registration error: ' . $e->getMessage());
            Alert::toast('Terjadi kesalahan pada sistem.', 'error')
                ->autoClose(10000)
                ->timerProgressBar();
            return redirect()->back()->withInput();
        }
    }

    public function lupaPassword()
    {
        return view('pages.register.lupa-password');
    }

    // public function resetpassword(Request $request)
    // {
    //     try {
    //         $member = Member::where('telepon', $request->telepon)->first();

    //         if ($member === null) {
    //             Alert::toast('Opss....!, Nomor tidak ditemukan atau belum terdaftar. Silahkan cek kembali.', 'error')->autoClose(10000)->timerProgressBar();
    //             return redirect()->route('lupapassword');
    //         }

    //         $rd = random_int(10000, 99999);

    //         $member->password = Hash::make($rd);
    //         $member->recovery_code = $rd;
    //         $member->save();

    //         SendWhatsAppResetPassword::dispatch($member);

    //         Alert::toast('Password berhasil diubah, silahkan cek WhatsApp kamu', 'success')->autoClose(10000)->timerProgressBar();
    //         return redirect()->route('login');
    //     } catch (\Exception $e) {
    //         Alert::toast('Terjadi kesalahan pada sistem.', 'error')->autoClose(10000)->timerProgressBar();
    //         return back()->withInput();
    //     }
    // }

    public function resetPassword(Request $request)
    {
        try {
            $member = Member::where('telepon', $request->telepon)->first();

            if ($member === null) {
                Alert::toast('Opss....!, Nomor tidak ditemukan atau belum terdaftar. Silahkan cek kembali.', 'error')->autoClose(10000)->timerProgressBar();
                return redirect()->route('lupapassword');
            }

            $defaultPassword = '12345';
            $rd = random_int(10000, 99999);

            $member->password = Hash::make($defaultPassword);
            $member->recovery_code = $rd;
            $member->save();

            SendWhatsAppResetPassword::dispatch($member);

            Alert::toast('Password berhasil diubah menjadi default, silahkan cek WhatsApp kamu', 'success')->autoClose(10000)->timerProgressBar();
            return redirect()->route('login');
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan pada sistem.', 'error')->autoClose(10000)->timerProgressBar();
            return back()->withInput();
        }
    }
}
