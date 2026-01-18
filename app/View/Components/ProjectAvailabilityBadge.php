<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Project;

class ProjectAvailabilityBadge extends Component
{
    public $project;
    public $position;
    public $style;

    /**
     * Create a new component instance.
     */
    public function __construct(Project $project, $position = 'top-right', $style = 'ribbon')
    {
        $this->project = $project;
        $this->position = $position;
        $this->style = $style; // 'ribbon' or 'badge'
    }

    public function render(): View|Closure|string
    {
        return view('components.project-availability-badge');
    }

    public function isAvailable()
    {
        return $this->project->project_product->where('status', 'Tersedia')->count() > 0;
    }

    public function badgeClasses()
    {
        if ($this->style === 'ribbon') {
            return '';
        }

        $classes = [];

        $positionClasses = [
            'top-right' => 'absolute top-4 right-4',
            'top-left' => 'absolute top-4 left-4',
            'bottom-right' => 'absolute bottom-4 right-4',
            'bottom-left' => 'absolute bottom-4 left-4',
            'inline' => ''
        ];

        // Hanya untuk badge HABIS
        $classes[] = 'rounded-full px-2 py-1 w-fit h-fit text-xs leading-tight text-custom-gray-10 bg-danger-main';
        $classes[] = $positionClasses[$this->position] ?? $positionClasses['top-right'];

        return implode(' ', array_filter($classes));
    }
}
