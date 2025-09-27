<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputField extends Component
{
    public string $name;
    public string $label;
    public string $type;
    public ?string $placeholder;
    public ?string $value;
    public bool $required;
    public ?string $class;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $name,
        string $label,
        string $type = 'text',
        ?string $placeholder = null,
        ?string $value = null,
        bool $required = false,
        ?string $class = null
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->required = $required;
        $this->class = $class;
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-field');
    }
}
