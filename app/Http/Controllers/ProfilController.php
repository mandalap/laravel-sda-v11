<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Jobs\SendWhatsAppSuccessChange;
use App\Models\BookingTransaction;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


use App\Models\Member;



class ProfilController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
        return view('pages.profile.profil', []);
    }

    public function detail()
    {
        $member = Auth::guard('member')->user();
        return view('pages.profile.detail', [
            'member' => $member,
        ]);
    }

    public function password()
    {
        return view('pages.profile.password', []);
    }

    public function updatePassword(Request $request)
    {
        try {
            $validated = $request->validateWithBag('updatePassword', [
                'current_password' => ['required', 'current_password'],
                'password' => ['required', Password::defaults(), 'confirmed'],
            ], [
                'current_password.required' => 'Password Lama Wajib Diisi!',
                'current_password.current_password' => 'Password Lama Tidak Sesuai!',
                'password.required' => 'Password Baru Wajib Diisi!',
                'password.confirmed' => 'Konfirmasi Password Tidak cocok!',
            ]);

            // Update password
            $request->user()->update([
                'password' => Hash::make($validated['password']),
            ]);
            $member = $request->user();

            SendWhatsAppSuccessChange::dispatch($member);
            // Flash message ke session
            Alert::toast('Password berhasil diubah.', 'success')->autoClose(5000);
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan: ' . $e->getMessage(), 'error')->autoClose(5000);
        }

        return redirect()->back();
    }

    /**
     * Update the user's profile information.
     */
    public function updateProfil(Request $request)
    {
        $member = $request->user('member');

        try {
            // Validasi input tanpa unique di telepon (karena akan dicek manual)
            $request->validate([
                'nama' => 'required|string|max:255',
                'telepon' => 'required|string|max:15',
                'gender' => 'nullable|in:L,P',
                'email' => 'required|email|max:255',
                'tempat_lahir' => 'nullable|string|max:255',
                'tanggal_lahir' => 'nullable|date',
                'alamat' => 'nullable|string|max:255',
                'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Cek apakah telepon sudah digunakan oleh member lain
            if (Member::where('telepon', $request->telepon)->where('id', '!=', $member->id)->exists()) {
                Alert::toast('Nomor WhatsApp sudah digunakan oleh akun lain.', 'error')->autoClose(10000);
                return redirect()->back();
            }

            // Cek apakah email sudah digunakan oleh member lain
            if (Member::where('email', $request->email)->where('id', '!=', $member->id)->exists()) {
                Alert::toast('Email sudah digunakan oleh akun lain.', 'error')->autoClose(10000);
                return redirect()->back();
            }

            // Perbarui data member
            $member->update([
                'nama' => $request->nama,
                'telepon' => $request->telepon,
                'gender' => $request->gender,
                'email' => $request->email,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
            ]);

            // Jika ada upload foto profil
            if ($request->hasFile('profile_picture')) {
                if ($member->thumbnail) {
                    Storage::delete('public/' . $member->thumbnail);
                }
                $path = $request->file('profile_picture')->store('profile_pictures', 'public');
                $member->thumbnail = $path;
                $member->save();
            }

            Alert::toast('Profil berhasil diperbarui.', 'success')->autoClose(10000);
            return redirect()->route('profil');
        } catch (ValidationException $e) {
            Alert::toast($e->getMessage(), 'error')->autoClose(10000);
            return redirect()->back()->withErrors($e->validator->errors());
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan: ' . $e->getMessage(), 'error')->autoClose(10000);
            return redirect()->back();
        }
    }

    public function riwayatBooking(Request $request)
    {
        $user = Auth::guard('member')->user();

        // Ambil booking dengan pagination (5 per halaman)
        $bookings = BookingTransaction::where('member_id', $user->id)
            ->with(['product', 'product.project'])
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('pages.profile.partials.riwayatBookingList', compact('bookings'))->render(),
                'hasMorePages' => $bookings->hasMorePages()
            ]);
        }

        return view('pages.profile.riwayatBooking', compact('bookings'));
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('member')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Tambahkan session marker
        $request->session()->put('just_logged_out', true);

        return redirect('login');
    }
}
