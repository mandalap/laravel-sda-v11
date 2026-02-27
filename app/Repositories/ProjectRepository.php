<?php

namespace App\Repositories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ProjectRepository
{
    public function buildQuery(
        ?int $kategoriId = null,
        array $lokasiIds = [],
        ?string $urutan = null,
        ?string $cari = null
    ): Builder {
        $query = Project::query()
            ->with([
                'lokasi.regency',
                'kategori',
                'project_product',
            ])
            ->withCount([
                'project_product as available_count' => fn($q) => $q->where('status', 'Tersedia')
            ])
            ->approvedAndVisible();

        if ($kategoriId) {
            $query->where('kategori_id', $kategoriId);
        }

        if (!empty($lokasiIds)) {
            $query->whereIn('lokasi_id', $lokasiIds);
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
            // Default: produk tersedia terbanyak duluan, sold out paling bawah
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

    public function getPaginated(Builder $query, int $perPage = 10): LengthAwarePaginator
    {
        return $query->paginate($perPage);
    }
}
