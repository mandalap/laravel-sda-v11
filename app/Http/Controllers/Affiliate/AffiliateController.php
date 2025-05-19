<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\Lokasi;
use App\Models\Regency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class AffiliateController extends Controller
{
    public function index()
    {
        return view('pages.affiliate.index');
    }

    public function getKota(Request $request)
    {
        $search = $request->search;

        // Ambil data regency dengan nama yang unik
        $data = Regency::where('name', 'like', "%$search%")
            ->distinct()  // Pastikan hanya kota unik yang diambil
            ->orderBy('name')
            ->limit(20)
            ->get(['id', 'name']);

        return response()->json($data);
    }

    public function daftar()
    {
        $member = Auth::guard('member')->user();
        $lokasi = Regency::all();
        return view('pages.affiliate.daftar', [
            'member' => $member,
            'lokasi' => $lokasi,
        ]);
    }

    public function store(Request $request)
    {
        try {
            // Validasi input dari form
            $agencyData = $request->validate([
                'nama' => 'required|string|max:255',
                'sapaan' => 'required|string',
                'telepon' => 'required|numeric',
                'email' => 'required|email',
                'gender' => 'required|string',
                'tanggal_lahir' => 'required|date',
                'kota_id' => 'required|string',
                'alamat' => 'required|string|max:255',
                'agency_code' => 'nullable|unique:agency,agency_code',
            ]);

            // Jika tidak ada agency_code yang diisi, buat kode secara otomatis
            if (!$request->filled('agency_code')) {
                $agencyData['agency_code'] = strtoupper(Str::random(8)); // Buat kode acak sepanjang 8 karakter
            }

            // Ambil member yang sedang login
            $member = Auth::guard('member')->user();
            $agencyData['member_id'] = $member->id;

            // Ambil nama kota berdasarkan kota_id
            $kota = Regency::find($request->kota_id);
            if ($kota) {
                $agencyData['kota_id'] = $kota->name;
            } else {
                // Jika kota tidak ditemukan, tampilkan pesan error dan kembali ke form
                Alert::toast('Kota tidak ditemukan.', 'error')->autoClose(10000)->timerProgressBar();
                return redirect()->back()->withInput();
            }

            // Simpan data ke database
            Agency::create($agencyData);

            // Setelah berhasil, tampilkan pesan sukses dan arahkan pengguna kembali
            Alert::toast('Anda berhasil melakukan pendaftaran.', 'success')->autoClose(10000)->timerProgressBar();
            return redirect()->route('affiliate.home');
        } catch (\Exception $e) {
            // Tangkap error jika ada dan tampilkan pesan error
            Alert::toast('Terjadi kesalahan saat pendaftaran: ' . $e->getMessage(), 'error')->autoClose(10000)->timerProgressBar();
            return redirect()->back()->withInput();
        }
    }

    public function home()
    {
        return view('pages.affiliate.home');
    }
}
