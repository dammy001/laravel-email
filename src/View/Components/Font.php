<?php

namespace Damilaredev\LaravelEmail\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Font extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public readonly string $fontFamily,
        public readonly string|array $fallbackFontFamily = [
            'Arial', 'Helvetica', 'Verdana', 'Georgia',
            'Times New Roman', 'serif', 'sans-serif',
            'monospace', 'cursive', 'fantasy',
        ],
        public readonly array $webFont = [],
        public readonly string $fontStyle = 'normal',
        public readonly int $fontWeight = 400
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laravel-email::components.font');
    }
}
