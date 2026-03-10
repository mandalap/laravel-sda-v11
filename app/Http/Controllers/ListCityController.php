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
    public function lihatkota(Request $request)
    {
        $totalcities = Lokasi::count();

        $cities = Lokasi::with([
            'regency',
            'province',
            'project' => function ($query) {
                $query->approvedAndVisible();
            },
            'project.project_product' => function ($query) {
                $query->where('status', 'Tersedia');
            }
        ])
            ->withApprovedProjects()
            ->get()
            ->map(function ($city) {
                // Hitung jumlah produk tersedia
                $city->jumlah_produk_tersedia = $city->project->sum(function ($project) {
                    return $project->project_product->count();
                });
                return $city;
            })
            ->sortByDesc('jumlah_produk_tersedia'); // Sort di controller

        return view("pages.city.kota", compact('cities', 'totalcities'));
    }
}
