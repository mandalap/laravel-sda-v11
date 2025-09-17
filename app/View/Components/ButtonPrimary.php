<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonPrimary extends Component
{
    public string $type;
    public string $size;
    public bool $fullWidth;
    public bool $disabled;
    public ?string $href;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $type = 'button',
        string $size = 'md',
        bool $fullWidth = false,
        bool $disabled = false,
        ?string $href = null
    ) {
        $this->type = $type;
        $this->size = $size;
        $this->fullWidth = $fullWidth;
        $this->disabled = $disabled;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-primary');
    }

    /**
     * Get the CSS classes for the button based on size and fullWidth props
     */
    public function getClasses(): string
    {
        $baseClasses = 'font-medium text-white bg-primary hover:bg-black rounded-full transition-colors focus:outline-none focus:ring-2 focus:ring-[#D81D76] focus:ring-opacity-50 disabled:opacity-50 disabled:cursor-not-allowed';

        // Size classes
        $sizeClasses = match ($this->size) {
            'sm' => 'h-[32px] px-3 text-sm',
            'md' => 'h-[40px] px-4 text-base',
            'lg' => 'h-[48px] px-6 text-lg',
            default => 'h-[40px] px-4 text-base'
        };

        // Width classes
        $widthClasses = $this->fullWidth ? 'w-full' : '';

        return trim("{$baseClasses} {$sizeClasses} {$widthClasses}");
    }
}
