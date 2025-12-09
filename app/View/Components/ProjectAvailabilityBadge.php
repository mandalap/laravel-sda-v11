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

    /**
     * Create a new component instance.
     */
    public function __construct(Project $project, $position = 'top-right')
    {
        $this->project = $project;
        $this->position = $position;
    }

    public function render(): View|Closure|string
    {
        return view('components.project-availability-badge');
    }

    public function isAvailable()
    {
        return $this->project->project_product->where('status', 'Tersedia')->count() > 0;
    }

    public function statusText()
    {
        return $this->isAvailable() ? 'Tersedia' : 'Habis';
    }

    public function badgeClasses()
    {
        $classes = [];

        // Position classes - ubah dari top-4/right-4 ke top-2/right-2
        $positionClasses = [
            'top-right' => 'absolute top-2 right-2',
            'top-left' => 'absolute top-2 left-2',
            'bottom-right' => 'absolute bottom-2 right-2',
            'bottom-left' => 'absolute bottom-2 left-2',
            'inline' => ''
        ];

        // Background color based on availability
        $bgClass = $this->isAvailable() ? 'bg-green-primary' : 'bg-danger-main';

        $classes[] = 'rounded-full px-2 py-1 w-fit h-fit text-xs leading-tight text-custom-gray-10';
        $classes[] = $positionClasses[$this->position] ?? $positionClasses['top-right'];
        $classes[] = $bgClass;

        return implode(' ', array_filter($classes));
    }
}
