<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Laratrust\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;



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
        return back();
    }


    public function daftar()
    {
        return view('pages.register.daftar');
    }

    public function storeRegister(Request $request)
    {
        try {
            $request->validate([
                'sapaan' => ['required'],
                'nama' => ['required', 'string', 'max:255'],
                'telepon' => ['required', 'string', 'max:15', 'unique:members,telepon'],
            ], [
                'sapaan.required' => 'Sapaan harus dipilih.',
                'nama.required' => 'Nama harus diisi.',
                'telepon.required' => 'Nomor WhatsApp harus diisi.',
                'telepon.unique' => 'Nomor Whatsapp sudah terdaftar.',
            ]);

            $member = Member::create([
                'sapaan' => $request->sapaan,
                'nama' => $request->nama,
                'telepon' => $request->telepon,
                'password' => Hash::make('123456'),
            ]);

            // Menambahkan role konsumen
            $memberRole = Role::where('name', 'member')->first();
            $member->addRole($memberRole);

            // redirect jika berhasil membuat akun
            return redirect()->route('login')->with('success', 'Akun anda berhasil dibuat.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Menampilkan error validasi sebagai toast
            $errors = $e->validator->errors()->all();
            foreach ($errors as $error) {
                Alert::toast($error, 'error')->autoClose(10000)->timerProgressBar();
            }

            return back()->withInput();
        } catch (\Exception $e) {
            // Menangani error lain
            Alert::toast('Terjadi kesalahan pada sistem.', 'error')->autoClose(10000)->timerProgressBar();
            return back()->withInput();
        }
    }

    public function lupapassword()
    {
        return view('pages.register.lupa-password');
    }
}
