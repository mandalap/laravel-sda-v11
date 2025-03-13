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

        $nama = $request->nama;
        $lokasi = $request->lokasi;

        if (empty($nama) && empty($lokasi)) {
            Alert::toast('Data tidak boleh kosong.', 'error');
            return redirect()->route('cara-properti')->withInput();
        }

        $query = Project::with(['lokasi']);

        if (!empty($nama)) {
            $query->where(function($query) use ($nama) {
                $query->where('nama_project', 'like', '%' . $nama . '%')
                    ->orWhere('alamat_project', 'like', '%' . $nama . '%');
            });
        }

        if (!empty($lokasi)) {
            $query->orWhereHas('lokasi', function($query) use ($lokasi) {
                $query->where('regency_id', $lokasi);
            });
        }

        $product = $query->get()->unique('id');

        if ($product->isEmpty()) {
            Alert::toast('Properti tidak ditemukan.', 'error');
            return redirect()->route('cara-properti')->withInput();
        }

        return view('pages.pencarian.result', compact('product'));
    }
}
