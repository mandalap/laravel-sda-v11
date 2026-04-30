<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Kelompok;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request)
    {
        $kategoriSlug = $request->query('propertiKategori', 'all');
        $kelompokSlug = $request->query('propertiType');
        $citySlug     = $request->query('propertiCity');

        // Jika masih ada parameter lama, redirect ke URL bersih
        if ($request->hasAny(['propertiKategori', 'propertiType', 'propertiCity'])) {
            $kategoriOptions = Kategori::orderBy('kategori')->get();

            $kategori = ($kategoriSlug && $kategoriSlug !== 'all')
                ? Kategori::where('slug', $kategoriSlug)->first()
                : null;

            $cleanParams = [];

            // Kategori
            $cleanParams['kategori'] = $kategori
                ? $kategori->slug
                : $kategoriOptions->pluck('slug')->implode(',');

            // Kelompok
            if ($kelompokSlug) {
                $cleanParams['kelompok'] = $kelompokSlug;
            }

            // Lokasi
            if ($citySlug && $citySlug !== 'all') {
                $lokasi = Lokasi::where('slug', $citySlug)->first();
                if ($lokasi) {
                    $cleanParams['lokasi'] = $lokasi->slug;
                }
            }

            if ($request->query('urutan')) {
                $cleanParams['urutan'] = $request->query('urutan');
            }

            return redirect()->route('properti.index', $cleanParams);
        }

        $kategoriOptions = Kategori::orderBy('kategori')->get();
        $kelompokOptions = Kelompok::orderBy('kelompok')->get();

        // Parse kategori
        $kategoriParam = $request->query('kategori', '');
        $slugArray     = $kategoriParam ? explode(',', $kategoriParam) : [];
        $preKategoriIds = $kategoriOptions
            ->whereIn('slug', $slugArray)
            ->pluck('id')
            ->toArray();

        // Parse kelompok
        $kelompokParam = $request->query('kelompok', '');
        $preKelompokId = $kelompokParam
            ? optional(Kelompok::where('slug', $kelompokParam)->first())->id
            : null;

        // Parse lokasi
        $lokasiParam  = $request->query('lokasi', '');
        $lokasiSlugs  = $lokasiParam ? explode(',', $lokasiParam) : [];
        $preLokasiIds = !empty($lokasiSlugs)
            ? Lokasi::whereIn('slug', $lokasiSlugs)->pluck('id')->toArray()
            : [];

        $lokasiOptions = $this->getLokasiOptions(null);

        // Judul halaman
        $pageTitle = match (true) {
            count($slugArray) === 1 => optional($kategoriOptions->firstWhere('slug', $slugArray[0]))->kategori ?? 'Properti',
            !empty($kelompokParam)  => optional(Kelompok::where('slug', $kelompokParam)->first())->kelompok ?? 'Semua Properti',
            default                 => 'Semua Properti',
        };

        return view('pages.property.index', compact(
            'lokasiOptions',
            'kategoriOptions',
            'kelompokOptions',
            'preKategoriIds',
            'preKelompokId',
            'preLokasiIds',
            'pageTitle',
        ));
    }

    private function getLokasiOptions(?Kategori $kategori)
    {
        return Lokasi::with('regency')
            ->whereHas(
                'project',
                fn($q) => $q->approvedAndVisible()
                    ->when($kategori, fn($q) => $q->where('kategori_id', $kategori->id))
            )
            ->get()
            ->sortBy(fn($l) => $l->regency?->name)
            ->values();
    }
}
