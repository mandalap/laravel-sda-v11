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

    #[Url(as: 'urutan')]
    public ?string $urutan = null;

    #[Url(as: 'lokasi', except: [])]
    public array $selectedLokasiIds = [];

    #[Url(as: 'cari', except: '')]
    public string $cari = '';

    public ?int $kategoriId = null;
    public bool $isModalOpen = false;
    public $lokasiOptions;
    public int $perPage = 10;

    const URUTAN_OPTIONS = [
        ['value' => 'terbaru',  'label' => 'Terbaru'],
        ['value' => 'terlama',  'label' => 'Terlama'],
        ['value' => 'termahal', 'label' => 'Termahal'],
        ['value' => 'termurah', 'label' => 'Termurah'],
    ];

    public function mount(?Kategori $kategori = null, $lokasiOptions = null): void
    {
        $this->kategoriId    = $kategori?->id;
        $this->lokasiOptions = $lokasiOptions;
    }

    public function getHasActiveFilterProperty(): bool
    {
        return !empty($this->urutan) || !empty($this->selectedLokasiIds);
    }

    public function getActiveFilterCountProperty(): int
    {
        $count = 0;
        if (!empty($this->urutan)) $count++;
        $count += count($this->selectedLokasiIds);
        return $count;
    }

    public function setUrutan(string $value): void
    {
        $this->urutan = ($this->urutan === $value) ? null : $value;
        $this->resetPage();
    }

    public function toggleLokasi(int $lokasiId): void
    {
        if (in_array($lokasiId, $this->selectedLokasiIds)) {
            $this->selectedLokasiIds = array_values(
                array_filter($this->selectedLokasiIds, fn($id) => $id !== $lokasiId)
            );
        } else {
            $this->selectedLokasiIds[] = $lokasiId;
        }
        $this->resetPage();
    }

    public function resetFilter(): void
    {
        $this->urutan            = null;
        $this->selectedLokasiIds = [];
        $this->cari              = '';
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
            kategoriId: $this->kategoriId,
            lokasiIds: $this->selectedLokasiIds,
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
