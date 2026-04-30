<?php

namespace App\Livewire;

use App\Models\Project;
use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class SiteplanViewer extends Component
{
    public Project $project;

    /** @var array<string, string> Map of code_product → status */
    public array $statusMap = [];

    // -------------------------------------------------------------------------
    // Lifecycle
    // -------------------------------------------------------------------------

    public function mount(Project $project): void
    {
        $this->project = $project;
        $this->loadStatusMap();
    }

    // -------------------------------------------------------------------------
    // Methods
    // -------------------------------------------------------------------------

    /**
     * Build a flat map: [ 'code_product' => 'status', ... ]
     * Dipakai oleh JavaScript untuk mewarnai elemen SVG.
     */
    private function loadStatusMap(): void
    {
        $this->statusMap = Product::where('project_id', $this->project->id)
            ->whereNotNull('code_product')
            ->pluck('status', 'code_product')
            ->toArray();
    }

    /**
     * Refresh status map (dipanggil saat ada update status produk).
     */
    public function refreshStatus(): void
    {
        $this->loadStatusMap();
        $this->dispatch('statusMapUpdated', statusMap: $this->statusMap);
    }

    // -------------------------------------------------------------------------
    // Render
    // -------------------------------------------------------------------------

    public function render()
    {
        $siteplan    = $this->project->siteplan;
        $svgContent  = $siteplan?->svg_content;

        return view('livewire.siteplan-viewer', [
            'svgContent' => $svgContent,
            'hasSiteplan' => $siteplan !== null,
        ]);
    }
}
