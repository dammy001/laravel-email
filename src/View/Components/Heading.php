<?php

namespace Damilaredev\LaravelEmail\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Heading extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public readonly string     $as = 'h1',
        public readonly string|int $m = '',
        public readonly string|int $mx = '',
        public readonly string|int $my = '',
        public readonly string|int $mt = '',
        public readonly string|int $mr = '',
        public readonly string|int $mb = '',
        public readonly string|int $ml = '',
    )
    {
        //
    }

    public function withMargin(array $props)
    {
        $nonEmptyStyles = array_merge(
            $this->withSpace($props['m'], ['margin']),
            $this->withSpace($props['mx'], ['margin-left', 'margin-right']),
            $this->withSpace($props['my'], ['margin-top', 'margin-bottom']),
            $this->withSpace($props['mt'], ['margin-top']),
            $this->withSpace($props['mr'], ['margin-right']),
            $this->withSpace($props['mb'], ['margin-bottom']),
            $this->withSpace($props['ml'], ['margin-left'])
        );

        $mergedStyles = [];

        foreach ($nonEmptyStyles as $style) {
            $mergedStyles = array_merge($mergedStyles, $style);
        }

        return implode(';', $mergedStyles);
    }

    protected function withSpace(string $value, array $properties): array
    {
        $styles = [];

        foreach ($properties as $property) {
            // Check to ensure the value is a valid number
            if (is_numeric($value)) {
                $styles[$property] = $value . 'px';
            }
        }

        return $styles;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('laravel-email::components.heading');
    }
}
