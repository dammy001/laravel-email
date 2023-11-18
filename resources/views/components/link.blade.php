<a
    {{ $attributes->merge(['style' => 'color: #067df7; text-decoration: none; cursor: pointer;']) }}
    target="{{ $target }}"
>
    {{ $slot }}
</a>
