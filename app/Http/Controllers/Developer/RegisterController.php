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
        $member = auth('member')->user();
        $developer = $member?->developer;

        $isRejected = $developer && $developer->status === 'rejected';

        return view('pages.developer.index', compact('isRejected', 'developer'));
    }


    public function register()
    {
        $member = auth('member')->user();
        $developer = $member->developer;

        $isUpdate = $developer && $developer->status === 'rejected';

        return view('pages.developer.register', compact('developer', 'isUpdate'));
    }
    public function registerStore(Request $request)
    {
        try {
            $member = Auth::guard('member')->user();

            $developer = $member->developer;

            // Validasi input
            $validated = $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|email|max:255' . ($developer ? '|unique:developers,email,' . $developer->id : '|unique:developers,email'),
                'telepon' => 'required|string|max:15' . ($developer ? '|unique:developers,telepon,' . $developer->id : '|unique:developers,telepon'),
                'alamat' => 'required|string|max:255',
                'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            if ($developer) {
                $developer->update([
                    'nama' => $validated['nama'],
                    'email' => $validated['email'],
                    'telepon' => $validated['telepon'],
                    'alamat' => $validated['alamat'],
                    'status' => 'pending',
                ]);

                $this->handleThumbnailUpload($request, $developer, true);
                $message = 'Data berhasil diperbaharui! Silakan tunggu verifikasi ulang.';
            } else {
                $developer = Developer::create([
                    'member_id' => $member->id,
                    'nama' => $validated['nama'],
                    'email' => $validated['email'],
                    'telepon' => $validated['telepon'],
                    'alamat' => $validated['alamat'],
                    'status' => 'pending',
                ]);

                $this->handleThumbnailUpload($request, $developer, false);
                $message = 'Pendaftaran berhasil! Silakan tunggu konfirmasi dari kami.';
            }

            Alert::toast($message, 'success')->autoClose(5000);
            return redirect()->route('developer.pending');
        } catch (ValidationException $e) {
            Alert::toast('Validasi gagal. Periksa kembali form Anda.', 'error')->autoClose(5000);
            return redirect()->back()->withInput()->withErrors($e->errors());
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan. Silakan coba lagi.', 'error')->autoClose(5000);
            return redirect()->back()->withInput();
        }
    }

    public function pending()
    {
        $developer = auth('member')->user()->developer;

        return view('pages.developer.pending', compact('developer'));
    }

    private function handleThumbnailUpload(Request $request, Developer $developer, bool $isUpdate)
    {
        if ($request->hasFile('thumbnail')) {
            // Hapus file lama jika update
            if ($isUpdate && $developer->thumbnail && Storage::disk('public')->exists($developer->thumbnail)) {
                Storage::disk('public')->delete($developer->thumbnail);
            }

            $developer->thumbnail = $request->file('thumbnail')->store('developers', 'public');
            $developer->save();
        }
    }
}
