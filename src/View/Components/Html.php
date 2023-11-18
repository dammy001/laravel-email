<?php

namespace Damilaredev\LaravelEmail\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Html extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public readonly string $lang = 'en',
        public readonly string $dir = 'ltr'
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laravel-email::components.html');
    }
}
