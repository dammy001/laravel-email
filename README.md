<div align="center"><strong>Laravel Email</strong></div>
<div align="center">The next generation of writing emails.<br />High-quality, unstyled components for creating emails.</div>

<br />
<div align="center">
<a href="https://github.com/dammy001/laravel-email">GitHub</a>
</div>

## Introduction

A collection of high-quality, unstyled components for creating beautiful emails using Laravel.
It reduces the pain of coding responsive emails with dark mode support. It also takes care of inconsistencies between Gmail, Outlook, and other email clients for you.

## Why

We believe that email is an extremely important medium for people to communicate. However, we need to stop developing emails like 2010, and rethink how email can be done in 2022 and beyond. Email development needs a revamp. A renovation. Modernized for the way we build web apps today.

## Install
```bash
composer require damilaredev/laravel-email
```

## Getting started

Add the component to your email template. Include styles where needed.

```html
<x-laravel-email.html>
    <x-laravel-email.head>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <x-laravel-email.font
                :font-family="'Br Firma'"
                :web-font="[
                     'url' => 'https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0e.ttf',
                     'format' => 'truetype'
                ]"
                :font-style="'normal'"
                :font-weight="400"
        />
    </x-laravel-email.head>

    <x-laravel-email.body
            style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto;background-color:rgba(255, 255, 255, 1);font-family:Open Sans, ui-sans-serif, system-ui, -apple-system,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,Ubuntu,sans-serif"
    >
        <x-laravel-email.container style="margin-left:auto;margin-right:auto; max-width:50em;margin:10px auto;">
            <x-laravel-email.section>
                <x-laravel-email.heading style="font-size:1.75rem;line-height:43.99px;font-weight:700;text-align:left; color: rgba(80, 85, 94, 1);">
                    Laravel Email
                </x-laravel-email.heading>
            </x-laravel-email.section>
        </x-laravel-email.container>
    </x-laravel-email.body>
</x-laravel-email.html>
```

## Components

A set of standard components to help you build amazing emails without having to deal with the mess of creating table-based layouts and maintaining archaic markup.

- HTML
```html
<x-laravel-email.html lang="en" dir="ltr">
    <x-laravel-email.link href="https://example.com">
        Click Me
    </x-laravel-email.link>
</x-laravel-email.html>
```
