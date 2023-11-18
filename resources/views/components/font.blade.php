@props(['fontFamily', 'fallbackFontFamily', 'webFont', 'fontStyle' => 'normal', 'fontWeight' => 400])

@php
    $src = $webFont ? "src: url({$webFont['url']}) format('{$webFont['format']}');" : '';

    $style = "
    @font-face {
        font-family: '$fontFamily';
        font-style: $fontStyle;
        font-weight: $fontWeight;
        mso-font-alt: '" . (is_array($fallbackFontFamily) ? $fallbackFontFamily[0] : $fallbackFontFamily) . "';
        {$src}
    }

    * {
        font-family: '$fontFamily', " . (is_array($fallbackFontFamily)
            ? implode(', ', $fallbackFontFamily) : $fallbackFontFamily) . ";
    }
    ";
@endphp

<style>{!! $style !!}</style>
