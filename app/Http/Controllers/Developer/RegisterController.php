<?php

namespace App\Http\Controllers\Developer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Developer;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;


class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.developer.index');
    }

    public function register()
    {
        return view('pages.developer.register');
    }

    public function registerStore(Request $request)
    {
        try {
            $member = Auth::guard('member')->user();

            // Validasi input
            $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|email|unique:developers,email',
                'telepon' => 'required|string|unique:developers,telepon|max:15',
                'alamat' => 'required|string|max:255',
                'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            if (!$member) {
                Alert::toast('Email sudah digunakan oleh pengguna lain.', 'error')->autoClose(10000);
                return redirect()->back();
            }

            $developer = new Developer();
            $developer->nama = $request->nama;
            $developer->email = $request->email;
            $developer->telepon = $request->telepon;
            $developer->alamat = $request->alamat;
            $developer->member_id = $member->id;

            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                if ($file->isValid()) {
                    $path = $file->store('profile_pictures', 'public');
                    $developer->thumbnail = $path;
                }
            }

            // Set status
            $developer->status = 'pending';

            $developer->save();

            Alert::toast('Pendaftaran berhasil. Silakan tunggu konfirmasi dari kami.', 'success')->autoClose(10000);
            return redirect()->route('developer.index');
        } catch (ValidationException $e) {
            Alert::toast($e->getMessage(), 'error')->autoClose(10000);
            return redirect()->back()->withInput()->withErrors($e->validator->errors());
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan: ' . $e->getMessage(), 'error')->autoClose(10000);
            return redirect()->back()->withInput();
        }
    }

    public function registerSuccess()
    {
        return view('pages.developer.success');
    }
}
