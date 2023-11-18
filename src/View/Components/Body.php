<?php

namespace Damilaredev\LaravelEmail\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Body extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
            <body {{ $attributes }}>
                {{ $slot }}
            </body>
        blade;
    }
}
