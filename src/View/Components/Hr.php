<?php

namespace Damilaredev\LaravelEmail\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hr extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
            <hr {{ $attributes->merge(['style' => 'width: 100%; border: none; border-top: 1px solid #eaeaea;']) }} />
        blade;
    }
}
