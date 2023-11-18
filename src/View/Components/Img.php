<?php

namespace Damilaredev\LaravelEmail\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Img extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public readonly string $src,
        public readonly string $height = '100%',
        public readonly string $width = '100%',
        public string $alt = '',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laravel-email::components.img');
    }
}
