<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Lokasi;
use App\Repositories\ProjectRepository;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(Request $request, ?string $kategoriSlug = null)
    {
        // Resolve kategori dari slug, null jika 'all' atau tidak ada
        $kategori = $kategoriSlug
            ? Kategori::where('slug', $kategoriSlug)->firstOrFail()
            : null;

        // Semua lokasi untuk ditampilkan di modal filter
        $lokasiOptions = Lokasi::with('regency')
            ->whereHas(
                'project',
                fn($q) => $q->approvedAndVisible()
                    ->when($kategori, fn($q) => $q->where('kategori_id', $kategori->id))
            )
            ->get()
            ->sortBy(fn($l) => $l->regency?->name)
            ->values();

        return view('pages.property.index', compact('kategori', 'lokasiOptions'));
    }
}
