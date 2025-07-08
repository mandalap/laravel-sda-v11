<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\Bank;
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

    public function search(Request $request)
    {
        $banks = Bank::where('nama_bank', 'like', "%{$request->q}%")
            ->select('nama_bank')
            ->distinct()
            ->limit(10)
            ->get();

        return response()->json($banks);
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
                'nama_bank' => 'required|string|max:255',
                'nomor_rekening' => 'required|string|max:255',
                'nama_pemilik' => 'required|string|max:255',
            ]);

            // Cek apakah telepon sudah digunakan oleh agency lain
            if (Agency::where('telepon', $request->telepon)->where('id', '!=', $agency->id)->exists()) {
                Alert::toast('Nomor WhatsApp sudah digunakan oleh pengguna lain.', 'error')->autoClose(10000);
                return redirect()->back()->with('active_tab', 'profil');
            }

            // Cek apakah email sudah digunakan oleh agency lain
            if (Agency::where('email', $request->email)->where('id', '!=', $agency->id)->exists()) {
                Alert::toast('Email sudah digunakan oleh akun lain.', 'error')->autoClose(10000);
                return redirect()->back()->with('active_tab', 'profil');
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
                'nama_bank' => $request->nama_bank,
                'nomor_rekening' => $request->nomor_rekening,
                'nama_pemilik' => $request->nama_pemilik,
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

            // validasi agency_code
            if ($request->has('agency_code')) {
                // Cek apakah sudah pernah edit
                if ($agency->referral_code_edited) {
                    Alert::toast('Kode referral hanya bisa diubah sekali.', 'error')->autoClose(10000)->timerProgressBar();
                    return redirect()->back()->with('active_tab', 'profil');
                }

                // Cek apakah agency_code-nya memang berubah
                if ($request->agency_code !== $agency->agency_code) {
                    // Validasi agency_code
                    $request->validate([
                        'agency_code' => 'required|string|unique:agency,agency_code,' . $agency->id,
                    ]);

                    // Update kode agency dan tandai sudah diedit
                    $agency->agency_code = $request->agency_code;
                    $agency->referral_code_edited = true;
                    $agency->save();
                }
            }

            // Tampilkan pesan sukses
            Alert::toast('Profil berhasil diupdate', 'success')->autoClose(10000)->timerProgressBar();
            // Redirect ke halaman profil
            return redirect()->back();
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tentukan tab mana yang berisi error
            $profilFields = ['sapaan', 'nama', 'telepon', 'gender', 'email', 'alamat', 'kota_id', 'tanggal_lahir', 'photo'];
            $rekeningFields = ['nama_bank', 'nomor_rekening', 'nama_pemilik'];

            $errorFields = array_keys($e->validator->errors()->toArray());
            $activeTab = 'profil'; // default tab

            // Cek apakah ada error di tab rekening
            if (array_intersect($errorFields, $rekeningFields)) {
                $activeTab = 'rekening';
            }
            Alert::toast($e->getMessage(), 'error')->autoClose(10000)->timerProgressBar();


            return redirect()->back()->withErrors($e->validator)->withInput()->with('active_tab', $activeTab);
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
