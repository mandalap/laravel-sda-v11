<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\BookingTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display the affiliate profile form.
     */
    public function index()
    {
        $member = Auth::guard('member')->user();
        $agency = $member->agency;
        return view('pages.affiliate.profile.index', [
            'agency' => $agency,
        ]);
    }

    /**
     * Update the affiliate profile.
     */
    public function update(Request $request)
    {
        try {
            // Validasi apakah agency sudah terdaftar
            $member = Auth::guard('member')->user();
            $agency = $member->agency;

            // Validasi input
            $request->validate([
                'sapaan' => 'required|string',
                'nama' => 'required|string|max:255',
                'telepon' => 'required|numeric',
                'gender' => 'required|in:L,P',
                'email' => 'required|email|max:255',
                'alamat' => 'required|string|max:255',
                'kota_id' => 'required|string|max:255',
                'tanggal_lahir' => 'nullable|date',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Cek apakah telepon sudah digunakan oleh agency lain
            if (Agency::where('telepon', $request->telepon)->where('id', '!=', $agency->id)->exists()) {
                Alert::toast('Nomor WhatsApp sudah digunakan oleh pengguna lain.', 'error')->autoClose(10000);
                return redirect()->back();
            }

            // Cek apakah email sudah digunakan oleh agency lain
            if (Agency::where('email', $request->email)->where('id', '!=', $agency->id)->exists()) {
                Alert::toast('Email sudah digunakan oleh akun lain.', 'error')->autoClose(10000);
                return redirect()->back();
            }

            // Perbarui data member
            $agency->update([
                'sapaan' => $request->sapaan,
                'nama' => $request->nama,
                'telepon' => $request->telepon,
                'gender' => $request->gender,
                'email' => $request->email,
                'kota_id' => $request->kota_id,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
            ]);

            // Jika ada upload foto profil
            if ($request->hasFile('photo')) {
                if ($agency->photo) {
                    Storage::delete('public/' . $agency->photo);
                }
                $path = $request->file('photo')->store('agency_photos', 'public');
                $agency->photo = $path;
                $agency->save();
            }


            // Tampilkan pesan sukses
            Alert::toast('Profil berhasil diupdate', 'success')->autoClose(10000)->timerProgressBar();
            // Redirect ke halaman profil
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error')->autoClose(10000)->timerProgressBar();
            return redirect()->back();
        }
    }

    public function riwayatBooking(Request $request)
    {
        $member = Auth::guard('member')->user();
        $agency = $member->agency;

        // Ambil booking dengan pagination (5 per halaman)
        $bookings = BookingTransaction::where('agency_id', $agency->id)
            ->with(['product', 'product.project'])
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('pages.affiliate.profile.partials.riwayatBookingList', compact('bookings'))->render(),
                'hasMorePages' => $bookings->hasMorePages()
            ]);
        }

        return view('pages.affiliate.profile.riwayatBooking', [
            'agency' => $agency,
            'bookings' => $bookings,
        ]);
    }
}
