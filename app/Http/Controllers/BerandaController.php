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

        $projects = Project::where('status', 'tampil')
            ->where('is_approved', 'Diterima')
            ->whereHas('project_product', function ($query) {
                $query->where('status', 'Tersedia');
            })->take(5)->get();

        $cities = Lokasi::limit(6)->inRandomOrder()->get();

        $agency     = Agency::count();
        $properties = Project::count();
        $products = Product::count();
        $members  = Member::count();


        return view('pages.beranda.index', compact(
            'projects',
            'cities',
            'kategories',
            'kelompoks',
            'kota',
            'agency',
            'properties',
            'products',
            'members',
            'testimoniBanners',
            'promoBanners'
        ));
    }
}
