<?php

namespace App\Repositories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class ProjectRepository
{
    public function buildQuery(
        ?int    $kategoriId  = null,
        array   $kategoriIds = [],
        array   $lokasiIds   = [],
        ?int    $kelompokId  = null,
        ?string $urutan      = null,
        ?string $cari        = null
    ): Builder {
        $query = Project::query()
            ->with([
                'lokasi.regency',
                'kategori',
                'project_product',
            ])
            ->withCount([
                'project_product as available_count' => fn($q) =>
                $q->where('status', 'Tersedia')
            ])
            ->approvedAndVisible();

        // Kategori dari filter modal (prioritas utama)
        if (!empty($kategoriIds)) {
            $query->whereIn('kategori_id', $kategoriIds);
        } elseif ($kategoriId) {
            // Fallback ke kategoriId tunggal dari route (tidak dipakai lagi tapi tetap ada sebagai fallback)
            $query->where('kategori_id', $kategoriId);
        }

        if (!empty($lokasiIds)) {
            $query->whereIn('lokasi_id', $lokasiIds);
        }

        if ($kelompokId) {
            $query->where('kelompok_id', $kelompokId);
        }

        if ($cari) {
            $query->where(function (Builder $q) use ($cari) {
                $q->where('nama_project', 'like', "%{$cari}%")
                    ->orWhere('alamat_project', 'like', "%{$cari}%");
            });
        }

        $this->applySort($query, $urutan);

        return $query;
    }

    private function applySort(Builder $query, ?string $urutan): void
    {
        match ($urutan) {
            'terbaru'  => $query->orderBy('projects.id', 'desc'),
            'terlama'  => $query->orderBy('projects.id', 'asc'),
            'termahal' => $this->applySortByPrice($query, 'desc'),
            'termurah' => $this->applySortByPrice($query, 'asc'),
            default    => $query
                ->withCount([
                    'project_product as tersedia_count' => fn($q) =>
                    $q->where('status', 'Tersedia')
                ])
                ->orderBy('tersedia_count', 'desc'),
        };
    }

    private function applySortByPrice(Builder $query, string $direction): void
    {
        $aggregate = $direction === 'desc' ? 'MAX' : 'MIN';

        $query->leftJoin(
            DB::raw("(
                SELECT {$aggregate}(harga) as harga_sort, project_id
                FROM products
                WHERE deleted_at IS NULL
                GROUP BY project_id
            ) as price_summary"),
            'projects.id',
            '=',
            'price_summary.project_id'
        )
            ->select('projects.*')
            ->orderByRaw('price_summary.harga_sort IS NULL ASC')
            ->orderByRaw("price_summary.harga_sort {$direction}");
    }

    public function getCount(Builder $query): int
    {
        return (clone $query)->reorder()->count();
    }
}
