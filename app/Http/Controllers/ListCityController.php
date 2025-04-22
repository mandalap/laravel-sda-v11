<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kelompok;
use App\Models\Lokasi;
use App\Models\Project;
use Illuminate\Http\Request;

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
        if ($propertyKategori == 'all') {
            $kategori = Kategori::all();
        } else {
            $kategori = Kategori::where('slug', $propertyKategori)->firstOrFail();
        }

        if ($propertyCity == 'all') {
            $city = Lokasi::all();
        } else {
            $city = Lokasi::where('slug', $propertyCity)->firstOrFail();
        }
        $projects   = Project::where('lokasi_id', $city->id)
            ->where('is_approved', 'Diterima')
            ->where('status', 'tampil')
            ->when($filter == 'terbaru', function ($query) {
                return $query->orderBy('id', 'desc');
            })
            ->when($filter == 'terlama', function ($query) {
                return $query->orderBy('id', 'asc');
            })
            ->get();

        return view("pages.city.detail", compact('city', 'projects', 'kategori', 'filter', 'propertyKategori', 'propertyCity'));
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
        $page = $request->query('page', 1); // Default to page 1
    
        $kelompok = Kelompok::where('slug', $type)->firstOrFail();
        if($kat == 'all'){
            $kategori = Kategori::all();
        } else{
            $kategori = Kategori::where('slug', $kat)->firstOrFail();
        }
        
        // Create the base query
        $query = Project::where('kelompok_id', $kelompok->id)
            ->where('is_approved', 'Diterima')
            ->where('status', 'tampil');
            
        // Apply filters
        if($filter == 'terbaru') {
            $query->orderBy('id', 'desc');
        } elseif($filter == 'terlama') {
            $query->orderBy('id', 'asc');
        }
        
        // Count total projects for the current filter
        $projectCount = $query->count();
        
        // For AJAX requests, return JSON with just the projects
        if($request->ajax()) {
            $projects = $query->skip(($page - 1) * 5)->take(5)->get();
            
            // Only render the view if there are projects
            $html = '';
            if($projects->count() > 0) {
                $html = view('pages.lihatsemua.itemProperti', compact('projects'))->render();
            }
            
            return response()->json([
                'html' => $html,
                'hasMorePages' => $projects->count() == 5 && $page * 5 < $projectCount
            ]);
        }
        
        // For initial page load, get first 5 projects
        $projects = $query->take(5)->get();
        
        return view("pages.lihatsemua.index", compact('projects', 'kelompok', 'projectCount', 'kategori', 'filter', 'type', 'kat'));
    }
}
