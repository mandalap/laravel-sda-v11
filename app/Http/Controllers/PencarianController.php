<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PencarianController extends Controller
{
    //
    public function index()
    {
        $kategori = Kategori::orderBy('kategori', 'asc')->get();
        $lokasi = Lokasi::orderBy('slug', 'asc')->get();

        return view('pages.pencarian.index', compact('kategori', 'lokasi'));
    }

    public function findproperti(Request $request)
    {
        // Ambil input dari request
        $nama = $request->nama;
        $lokasi = $request->lokasi;

        // Buat query dasar
        $query = Project::with(['lokasi']);

        // Tambahkan kondisi pencarian berdasarkan nama
        if (!empty($nama)) {
            $query->where(function($query) use ($nama) {
                $query->where('nama_project', 'like', '%' . $nama . '%')
                      ->orWhere('alamat_project', 'like', '%' . $nama . '%');
            });
        }

        // Tambahkan kondisi pencarian berdasarkan lokasi
        if (!empty($lokasi)) {
            $query->orWhereHas('lokasi', function($query) use ($lokasi) {
                $query->where('regency_id', $lokasi);
            });
        }

        // Ambil hasil query dan grup berdasarkan ID produk
        $product = $query->get()->unique('id'); // Mengambil produk unik berdasarkan ID

        // Cek apakah produk ditemukan
        if ($product->isEmpty()) {
            Alert::toast('Properti tidak ditemukan.', 'error');
            return redirect()->route('cara-properti')->withInput();
        }

        // Lanjutkan dengan logika Anda untuk menampilkan produk

        return view('pages.pencarian.result', compact('product'));
    }
}
