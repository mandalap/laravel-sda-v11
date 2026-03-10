<?php

namespace App\Livewire;

use App\Models\Kategori;
use App\Repositories\ProjectRepository;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class PropertyList extends Component
{
    use WithPagination;

    #[Url(as: 'kategori', except: '')]
    public string $kategoriParam = '';

    #[Url(as: 'lokasi', except: '')]
    public string $lokasiParam = '';

    #[Url(as: 'kelompok', except: '')]
    public string $kelompokParam = '';

    #[Url(as: 'urutan', except: '')]
    public string $urutan = '';

    #[Url(as: 'cari', except: '')]
    public string $cari = '';

    public array $selectedKategoriIds = [];
    public array $selectedLokasiIds   = [];
    public ?int  $selectedKelompokId  = null;

    public bool $isModalOpen = false;
    public $lokasiOptions;
    public $kategoriOptions;
    public $kelompokOptions;
    public int $perPage = 10;

    const URUTAN_OPTIONS = [
        ['value' => 'terbaru',  'label' => 'Terbaru'],
        ['value' => 'terlama',  'label' => 'Terlama'],
        ['value' => 'termahal', 'label' => 'Termahal'],
        ['value' => 'termurah', 'label' => 'Termurah'],
    ];

    public function mount(
        $lokasiOptions        = null,
        $kategoriOptions      = null,
        $kelompokOptions      = null,
        array $preKategoriIds = [],
        ?int  $preKelompokId  = null,
        array $preLokasiIds   = [],
    ): void {
        $this->lokasiOptions   = $lokasiOptions;
        $this->kategoriOptions = $kategoriOptions;
        $this->kelompokOptions = $kelompokOptions;

        // Parse URL params ke array internal
        if ($this->kategoriParam !== '') {
            $this->selectedKategoriIds = $this->slugsToIds(
                explode(',', $this->kategoriParam),
                $kategoriOptions,
                'slug'
            );
        } elseif (!empty($preKategoriIds)) {
            $this->selectedKategoriIds = $preKategoriIds;
            $this->syncKategoriParam();
        }

        if ($this->lokasiParam !== '') {
            $this->selectedLokasiIds = $this->slugsToIds(
                explode(',', $this->lokasiParam),
                $lokasiOptions,
                'slug'
            );
        } elseif (!empty($preLokasiIds)) {
            $this->selectedLokasiIds = $preLokasiIds;
            $this->syncLokasiParam();
        }

        if ($this->kelompokParam !== '') {
            $kelompok = $kelompokOptions?->firstWhere('slug', $this->kelompokParam);
            $this->selectedKelompokId = $kelompok?->id;
        } elseif (!is_null($preKelompokId)) {
            $this->selectedKelompokId = $preKelompokId;
            $this->syncKelompokParam();
        }
    }

    // Konversi slug array → id array
    private function slugsToIds(array $slugs, $collection, string $slugColumn): array
    {
        return $collection
            ?->whereIn($slugColumn, $slugs)
            ->pluck('id')
            ->toArray() ?? [];
    }

    // Sync state internal → URL param
    private function syncKategoriParam(): void
    {
        $slugs = $this->kategoriOptions
            ?->whereIn('id', $this->selectedKategoriIds)
            ->pluck('slug')
            ->implode(',') ?? '';
        $this->kategoriParam = $slugs;
    }

    private function syncLokasiParam(): void
    {
        $slugs = $this->lokasiOptions
            ?->whereIn('id', $this->selectedLokasiIds)
            ->pluck('slug')
            ->implode(',') ?? '';
        $this->lokasiParam = $slugs;
    }

    private function syncKelompokParam(): void
    {
        $slug = $this->kelompokOptions
            ?->firstWhere('id', $this->selectedKelompokId)
            ?->slug ?? '';
        $this->kelompokParam = $slug;
    }

    public function getHasActiveFilterProperty(): bool
    {
        return !empty($this->urutan)
            || !empty($this->selectedLokasiIds)
            || !empty($this->selectedKategoriIds)
            || !is_null($this->selectedKelompokId);
    }

    public function getActiveFilterCountProperty(): int
    {
        $count = 0;
        if (!empty($this->urutan))               $count++;
        if (!is_null($this->selectedKelompokId)) $count++;
        $count += count($this->selectedLokasiIds);
        $count += count($this->selectedKategoriIds);
        return $count;
    }

    public function setUrutan(string $value): void
    {
        $this->urutan = ($this->urutan === $value) ? '' : $value;
        $this->resetPage();
    }

    public function setKelompok(int $id): void
    {
        $this->selectedKelompokId = ($this->selectedKelompokId === $id) ? null : $id;
        $this->syncKelompokParam();
        $this->resetPage();
    }

    public function toggleKategori(int $id): void
    {
        if (in_array($id, $this->selectedKategoriIds)) {
            $this->selectedKategoriIds = array_values(
                array_filter($this->selectedKategoriIds, fn($k) => $k !== $id)
            );
        } else {
            $this->selectedKategoriIds[] = $id;
        }
        $this->syncKategoriParam();
        $this->resetPage();
    }

    public function toggleLokasi(int $id): void
    {
        if (in_array($id, $this->selectedLokasiIds)) {
            $this->selectedLokasiIds = array_values(
                array_filter($this->selectedLokasiIds, fn($k) => $k !== $id)
            );
        } else {
            $this->selectedLokasiIds[] = $id;
        }
        $this->syncLokasiParam();
        $this->resetPage();
    }

    public function resetFilter(): void
    {
        $this->urutan              = '';
        $this->selectedLokasiIds   = [];
        $this->selectedKategoriIds = [];
        $this->selectedKelompokId  = null;
        $this->kategoriParam       = '';
        $this->lokasiParam         = '';
        $this->kelompokParam       = '';
        $this->cari                = '';
        $this->resetPage();
    }

    public function updatedCari(): void
    {
        $this->resetPage();
    }
    public function openModal(): void
    {
        $this->isModalOpen = true;
    }
    public function closeModal(): void
    {
        $this->isModalOpen = false;
    }

    public function render(ProjectRepository $repository)
    {
        $query = $repository->buildQuery(
            kategoriIds: $this->selectedKategoriIds,
            lokasiIds: $this->selectedLokasiIds,
            kelompokId: $this->selectedKelompokId,
            urutan: $this->urutan,
            cari: $this->cari,
        );

        $projects = $query->paginate($this->perPage);

        return view('livewire.property-list', [
            'projects'      => $projects,
            'totalCount'    => $projects->total(),
            'uraianOptions' => self::URUTAN_OPTIONS,
        ]);
    }
}
