<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Kategori;
use App\Models\Kelompok;
use App\Models\Lokasi;
use App\Models\Member;
use App\Models\Product;
use App\Models\Project;
use App\Models\PromoBanner;
use App\Models\TestimoniBanner;

class BerandaController extends Controller
{
    //
    public function beranda()
    {

        $kelompoks = Kelompok::all();
        // Mengambil semua data TestimoniBanner
        $testimoniBanners = TestimoniBanner::where('status', 'active')->get();
        $promoBanners = PromoBanner::where('status', 'active')
            ->where(function ($query) {
                $now = now();
                $query->where(function ($q) use ($now) {
                    // Banner dengan tanggal mulai dan selesai yang valid
                    $q->where('start_date', '<=', $now)
                        ->where('end_date', '>=', $now);
                })->orWhere(function ($q) {
                    // Banner tanpa batasan waktu (null)
                    $q->whereNull('start_date')
                        ->whereNull('end_date');
                });
            })
            ->orderBy('id', 'desc')
            ->get();
        $kota = Lokasi::all();
        $kategories = Kategori::orderBy('kategori', 'desc')->get();

        $projectPopuler = Project::approvedAndVisible()
            ->whereHas('project_product', function ($query) {
                $query->where('status', 'Tersedia');
            })
            ->whereHas('kelompok', function ($query) {
                $query->where('slug', 'popular');
            })
            ->with(['kategori', 'kelompok', 'project_product', 'lokasi', 'developer', 'jenis'])
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();

        $tanahKavlingTerbaik = Project::approvedAndVisible()
            ->whereHas('project_product', function ($query) {
                $query->where('status', 'Tersedia');
            })
            ->whereHas('kategori', function ($query) {
                $query->where('kategori', 'LIKE', '%tanah kavling%');
            })
            ->whereHas('kelompok', function ($query) {
                $query->where('kelompok', 'LIKE', '%terbaik%');
            })
            ->with(['kategori', 'kelompok', 'project_product', 'lokasi', 'developer'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $hunianRekomendasi = Project::approvedAndVisible()
            ->whereHas('project_product', function ($query) {
                $query->where('status', 'Tersedia');
            })
            ->whereHas('kategori', function ($query) {
                $query->where('kategori', 'LIKE', '%rumah%');
            })
            ->whereHas('kelompok', function ($query) {
                $query->where('kelompok', 'LIKE', '%rekomendasi%');
            })
            ->with(['kategori', 'kelompok', 'project_product', 'lokasi', 'developer'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $listingTerbaru = Project::approvedAndVisible()
            ->with(['kategori', 'kelompok', 'project_product', 'lokasi', 'developer', 'jenis'])
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        $cities = Lokasi::withApprovedProjects()
            ->withApprovedProjectCount()
            ->get();

        $agency     = Agency::count();
        $properties = Project::approvedAndVisible()->count();
        $products = Product::whereHas('project', function ($query) {
            $query->approvedAndVisible();
        })->count();
        $members  = Member::count();


        return view('pages.beranda.index', compact(
            'cities',
            'kategories',
            'kelompoks',
            'kota',
            'agency',
            'properties',
            'products',
            'members',
            'testimoniBanners',
            'promoBanners',
            'projectPopuler',
            'tanahKavlingTerbaik',
            'hunianRekomendasi',
            'listingTerbaru'
        ));
    }
}
