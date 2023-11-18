@props([
    'as' => 'h1',
    'm' => '',
    'mx' => '',
    'my' => '',
    'mt' => '',
    'mr' => '',
    'mb' => '',
    'ml' => ''
])

<{{ $as }} {{ $attributes->merge(['style' => $withMargin(['m' => $m, 'mx' => $mx, 'my' => $my, 'mt' => $mt, 'mr' => $mr, 'mb' => $mb, 'ml' => $ml])]) }}>
    {{ $slot }}
</{{ $as }}>
