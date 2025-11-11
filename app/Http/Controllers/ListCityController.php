<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kelompok;
use App\Models\Lokasi;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class ListCityController extends Controller
{
    //
    public function kategori($slug)
    {
        $kategori = Kategori::where('slug', $slug)->firstOrFail();

        $totalcities = Lokasi::count();

        $cities = Lokasi::with('regency')
            ->join('regencies', 'lokasi.regency_id', '=', 'regencies.id') // Bergabung dengan tabel regencies
            ->join('projects', 'lokasi.id', '=', 'projects.lokasi_id') // Bergabung dengan tabel projects
            ->join('kategori', 'projects.kategori_id', '=', 'kategori.id') // Bergabung dengan tabel categories
            ->where('kategori.kategori', $kategori->kategori) // Menambahkan kondisi untuk kategori
            ->where('projects.is_approved', 'Diterima')
            ->where('projects.status', 'tampil')
            ->orderBy('regencies.name', 'asc') // Urutkan berdasarkan nama dari tabel regencies
            ->select('lokasi.*', 'regencies.name as regency_name') // Memilih kolom dari tabel lokasi dan nama dari tabel regencies
            ->distinct() // Menghindari duplikasi lokasi jika ada lebih dari satu proyek
            ->get();

        return view("pages.city.kategori", compact('cities', 'totalcities', 'kategori'));
    }

    public function detailkategori($kategori, $slug) {}



    public function lihatproperti(Request $request)
    {
        $propertyKategori = $request->query('propertiKategori');
        $propertyCity = $request->query('propertiCity');
        $filter = $request->query('filter');
        $cari = $request->query('cari');
        $page = $request->query('page', 1); // Default ke halaman 1

        if ($propertyKategori == 'all') {
            $kategori = null; // Set null jika 'all'
            $allKategori = Kategori::all(); // Simpan semua kategori jika diperlukan
        } else {
            $kategori = Kategori::where('slug', $propertyKategori)->firstOrFail();
            $allKategori = null;
        }

        if ($propertyCity == 'all') {
            $city = null; // Set null jika 'all'
            $allCity = Lokasi::all(); // Simpan semua lokasi jika diperlukan
        } else {
            $city = Lokasi::where('slug', $propertyCity)->firstOrFail();
            $allCity = null;
        }


        // Buat query dasar
        $query = Project::where('projects.is_approved', 'Diterima')
            ->where('projects.status', 'tampil');

        // Filter berdasarkan lokasi/kota
        if ($propertyCity != 'all') {
            $query->where('lokasi_id', $city->id);
        }

        // Filter berdasarkan kategori jika bukan 'all'
        if ($propertyKategori != 'all') {
            $query->where('kategori_id', $kategori->id);
        }

        // Terapkan filter pencarian
        if ($cari) {
            $query->where(function ($q) use ($cari) {
                $q->where('nama_project', 'like', '%' . $cari . '%')
                    ->orWhere('alamat_project', 'like', '%' . $cari . '%');
            });
        }

        // Terapkan filter urutan
        if ($filter == 'terbaru') {
            $query->orderBy('id', 'desc');
        } elseif ($filter == 'terlama') {
            $query->orderBy('id', 'asc');
        } elseif ($filter == 'termahal') {
            // Dapatkan ID kategori tanah kavling
            $kavlingId = Kategori::where('kategori', 'tanah kavling')->orWhere('slug', 'tanah-kavling')->value('id');

            // Jika kavling ID ditemukan, gunakan logika khusus untuk kavling
            if ($kavlingId) {
                // Join dengan tabel products hanya saat diperlukan untuk sorting harga
                $query->leftJoin('products', 'projects.id', '=', 'products.project_id')
                    ->select('projects.*')
                    ->selectRaw('MAX(products.harga) as harga_tertinggi')
                    ->groupBy([
                        'projects.id',
                        'projects.developer_id',
                        'projects.lokasi_id',
                        'projects.kategori_id',
                        'projects.jenis_id',
                        'projects.nama_project',
                        'projects.slug',
                        'projects.alamat_project',
                        'projects.url_video',
                        'projects.google_map',
                        'projects.latlang',
                        'projects.deskripsi',
                        'projects.sertifikat',
                        'projects.status_sertifikat',
                        'projects.transaksi',
                        'projects.status',
                        'projects.kelompok_id',
                        'projects.is_approved',
                        'projects.thumbnail',
                        'projects.deleted_at',
                        'projects.created_at',
                        'projects.updated_at'
                    ])
                    ->orderBy('harga_tertinggi', 'desc');
            } else {
                // Jika kategori kavling tidak ditemukan, fallback ke pengurutan default
                $query->orderBy('projects.created_at', 'desc');
            }
        } elseif ($filter == 'termurah') {
            // Dapatkan ID kategori tanah kavling
            $kavlingId = Kategori::where('kategori', 'tanah kavling')->orWhere('slug', 'tanah-kavling')->value('id');

            // Jika kavling ID ditemukan, gunakan logika khusus untuk kavling
            if ($kavlingId) {
                // Join dengan tabel products hanya saat diperlukan untuk sorting harga
                $query->leftJoin('products', 'projects.id', '=', 'products.project_id')
                    ->select('projects.*')
                    ->selectRaw('MIN(products.harga) as harga_terendah')
                    ->groupBy([
                        'projects.id',
                        'projects.developer_id',
                        'projects.lokasi_id',
                        'projects.kategori_id',
                        'projects.jenis_id',
                        'projects.nama_project',
                        'projects.slug',
                        'projects.alamat_project',
                        'projects.url_video',
                        'projects.google_map',
                        'projects.latlang',
                        'projects.deskripsi',
                        'projects.sertifikat',
                        'projects.status_sertifikat',
                        'projects.transaksi',
                        'projects.status',
                        'projects.kelompok_id',
                        'projects.is_approved',
                        'projects.thumbnail',
                        'projects.deleted_at',
                        'projects.created_at',
                        'projects.updated_at'
                    ])
                    ->orderBy('harga_terendah', 'asc');
            } else {
                // Jika kategori kavling tidak ditemukan, fallback ke pengurutan default
                $query->orderBy('projects.created_at', 'desc');
            }
        }

        // Hitung total proyek untuk filter saat ini
        if (in_array($filter, ['termahal', 'termurah'])) {
            // Untuk filter harga, kita perlu menghitung dengan cara berbeda karena ada groupBy
            $projectCount = $query->get()->count();
        } else {
            // Untuk filter lain, kita bisa menggunakan count() langsung
            $projectCount = $query->count();
        }

        // Untuk permintaan AJAX, kembalikan JSON dengan proyek saja
        if ($request->ajax()) {
            $projects = $query->skip(($page - 1) * 5)->take(5)->get();

            $html = '';
            if ($projects->count() > 0) {
                $html = view('pages.city.partials.projectItems', compact('projects'))->render();
            }

            return response()->json([
                'html' => $html,
                'hasMorePages' => $projects->count() == 5 && $page * 5 < $projectCount
            ]);
        }

        // Untuk pemuatan halaman awal, ambil 5 proyek pertama
        $projects = $query->skip(($page - 1) * 5)->take(5)->get();

        return view("pages.city.detail", compact('city', 'projects', 'kategori', 'filter', 'propertyKategori', 'propertyCity', 'projectCount', 'cari'));
    }
    public function lihatkota(Request $request)
    {
        $totalcities = Lokasi::count();

        $cities = Lokasi::with('regency')
            ->join('regencies', 'lokasi.regency_id', '=', 'regencies.id') // Bergabung dengan tabel regencies
            ->join('projects', 'lokasi.id', '=', 'projects.lokasi_id') // Bergabung dengan tabel projects
            ->where('projects.is_approved', 'Diterima')
            ->where('projects.status', 'tampil')
            ->orderBy('regencies.name', 'asc') // Urutkan berdasarkan nama dari tabel regencies
            ->select('lokasi.*', 'regencies.name as regency_name') // Memilih kolom dari tabel lokasi dan nama dari tabel regencies
            ->distinct() // Menghindari duplikasi lokasi jika ada lebih dari satu proyek
            ->get();

        return view("pages.city.kota", compact('cities', 'totalcities'));
    }

    public function properti(Request $request)
    {
        $slug = $request->query('citiesType');
        $city = Lokasi::where('slug', $slug)->firstOrFail();
        $projects = Project::where('lokasi_id', $city->id)
            ->where('is_approved', 'Diterima')
            ->where('status', 'tampil')
            ->get();

        $projectCount = $projects->count();
        return view("pages.city.properti", compact('projects', 'city', 'projectCount'));
    }

    public function lihat(Request $request)
    {
        $type = $request->query('propertiType');
        $kat = $request->query('propertiKategori');
        $filter = $request->query('filter');
        $cari = $request->query('cari');
        $page = $request->query('page', 1); // Default to page 1

        $kelompok = Kelompok::where('slug', $type)->firstOrFail();
        if ($kat == 'all') {
            $kategori = Kategori::all();
        } else {
            $kategori = Kategori::where('slug', $kat)->firstOrFail();
        }

        // Create the base query
        $query = Project::where('kelompok_id', $kelompok->id)
            ->where('projects.is_approved', 'Diterima')
            ->where('projects.status', 'tampil');
            // ->withCount(['products as tersedia_count' => function ($query) {
            //     $query->where('status', 'Tersedia');
            // }])
            // ->orderBy('tersedia_count', 'desc');

        // Apply kategori filter jika kategori selain 'all'
        if ($kat != 'all') {
            $query->where('projects.kategori_id', $kategori->id);
        }

        // Apply the search filter
        if ($cari) {
            $query->where(function ($q) use ($cari) {
                $q->where('nama_project', 'like', '%' . $cari . '%')
                    ->orWhere('alamat_project', 'like', '%' . $cari . '%');
            });
        }

        // Apply other filters like 'terbaru', 'terlama'
        if ($filter == 'terbaru') {
            $query->orderBy('id', 'desc');
        } elseif ($filter == 'terlama') {
            $query->orderBy('id', 'asc');
        } elseif ($filter == 'termahal') {
            // Dapatkan ID kategori tanah kavling
            $kavlingId = Kategori::where('kategori', 'tanah kavling')->orWhere('slug', 'tanah-kavling')->value('id');

            // Jika kavling ID ditemukan, gunakan logika khusus untuk kavling
            if ($kavlingId) {
                // Join dengan tabel products hanya saat diperlukan untuk sorting harga
                $query->leftJoin('products', 'projects.id', '=', 'products.project_id')
                    ->select('projects.*')
                    ->selectRaw('MAX(products.harga) as harga_tertinggi')
                    ->groupBy([
                        'projects.id',
                        'projects.developer_id',
                        'projects.lokasi_id',
                        'projects.kategori_id',
                        'projects.jenis_id',
                        'projects.nama_project',
                        'projects.slug',
                        'projects.alamat_project',
                        'projects.url_video',
                        'projects.google_map',
                        'projects.latlang',
                        'projects.deskripsi',
                        'projects.sertifikat',
                        'projects.status_sertifikat',
                        'projects.transaksi',
                        'projects.status',
                        'projects.kelompok_id',
                        'projects.is_approved',
                        'projects.thumbnail',
                        'projects.deleted_at',
                        'projects.created_at',
                        'projects.updated_at'
                    ])
                    ->orderBy('harga_tertinggi', 'desc');
            } else {
                // Jika kategori kavling tidak ditemukan, fallback ke pengurutan default
                $query->orderBy('projects.created_at', 'desc');
            }
        } elseif ($filter == 'termurah') {
            // Dapatkan ID kategori tanah kavling
            $kavlingId = Kategori::where('kategori', 'tanah kavling')->orWhere('slug', 'tanah-kavling')->value('id');

            // Jika kavling ID ditemukan, gunakan logika khusus untuk kavling
            if ($kavlingId) {
                // Join dengan tabel products hanya saat diperlukan untuk sorting harga
                $query->leftJoin('products', 'projects.id', '=', 'products.project_id')
                    ->select('projects.*')
                    ->selectRaw('MIN(products.harga) as harga_terendah')
                    ->groupBy([
                        'projects.id',
                        'projects.developer_id',
                        'projects.lokasi_id',
                        'projects.kategori_id',
                        'projects.jenis_id',
                        'projects.nama_project',
                        'projects.slug',
                        'projects.alamat_project',
                        'projects.url_video',
                        'projects.google_map',
                        'projects.latlang',
                        'projects.deskripsi',
                        'projects.sertifikat',
                        'projects.status_sertifikat',
                        'projects.transaksi',
                        'projects.status',
                        'projects.kelompok_id',
                        'projects.is_approved',
                        'projects.thumbnail',
                        'projects.deleted_at',
                        'projects.created_at',
                        'projects.updated_at'
                    ])
                    ->orderBy('harga_terendah', 'asc');
            } else {
                // Jika kategori kavling tidak ditemukan, fallback ke pengurutan default
                $query->orderBy('projects.created_at', 'desc');
            }
        }

        // Hitung total proyek untuk filter saat ini
        if (in_array($filter, ['termahal', 'termurah'])) {
            // Untuk filter harga, kita perlu menghitung dengan cara berbeda karena ada groupBy
            $projectCount = $query->get()->count();
        } else {
            // Untuk filter lain, kita bisa menggunakan count() langsung
            $projectCount = $query->count();
        }

        // For AJAX requests, return JSON with just the projects
        if ($request->ajax()) {
            $projects = $query->skip(($page - 1) * 5)->take(5)->get();

            $html = '';
            if ($projects->count() > 0) {
                $html = view('pages.lihatsemua.itemProperti', compact('projects'))->render();
            }

            return response()->json([
                'html' => $html,
                'hasMorePages' => $projects->count() == 5 && $page * 5 < $projectCount
            ]);
        }

        // For initial page load, get first 5 projects
        $projects = $query->skip(($page - 1) * 5)->take(5)->get();

        return view("pages.lihatsemua.index", compact('projects', 'kelompok', 'projectCount', 'kategori', 'filter', 'type', 'kat', 'cari'));
    }
}
