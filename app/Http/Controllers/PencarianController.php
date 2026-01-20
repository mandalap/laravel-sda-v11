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

        // Validasi input
        if (!$request->ajax() && empty($nama) && empty($lokasi)) {
            Alert::toast('Data tidak boleh kosong.', 'info')->autoClose(10000)->timerProgressBar();
            return redirect()->back()->withInput();
        }

        $query = Project::with(['lokasi', 'jenis', 'kategori', 'project_product'])
            ->approvedAndVisible();

        // Filter berdasarkan nama
        if (!empty($nama)) {
            $query->where(function ($query) use ($nama) {
                $query->where('nama_project', 'like', '%' . $nama . '%')
                    ->orWhere('alamat_project', 'like', '%' . $nama . '%');
            });
        }

        // Filter berdasarkan lokasi
        if (!empty($lokasi)) {
            $query->whereHas('lokasi', function ($query) use ($lokasi) {
                $query->where('regency_id', $lokasi);
            });
        }

        // Pagination hasil pencarian
        $product = $query->paginate(10);

        if ($product->isEmpty() && !$request->ajax()) {
            Alert::toast('Properti tidak ditemukan.', 'error')->autoClose(10000)->timerProgressBar();
            return redirect()->back()->withInput();
        }

        // Jika request AJAX (infinite scroll), kirim response JSON
        if ($request->ajax()) {
            return response()->json([
                'html' => view('pages.pencarian.partials.propertyList', compact('product'))->render(),
                'hasMorePages' => $product->hasMorePages()
            ]);
        }

        // Pass search parameters to maintain them during pagination
        $product->appends([
            'nama' => $nama,
            'lokasi' => $lokasi
        ]);

        return view('pages.pencarian.result', compact('product'));
    }
}
