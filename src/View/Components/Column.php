<?php

namespace Damilaredev\LaravelEmail\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Column extends Component
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
            <td data-id="__laravel-email-column" {{ $attributes }}>
               {{ $slot }}
            </td>
        blade;
    }
}
