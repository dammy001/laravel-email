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

### HTML
```html
<x-laravel-email.html lang="en" dir="ltr">
    <x-laravel-email.link href="https://example.com">
        Click Me
    </x-laravel-email.link>
</x-laravel-email.html>
```

### Head
```html
<x-laravel-email.head>
    <title>email title</title>
</x-laravel-email.head>
```

### Heading
```html
<x-laravel-email.heading as="h1">Lorem Ipsum</x-laravel-email.heading> 
```

### Link
```html
<x-laravel-email.link href="https://example.com">
    Example
</x-laravel-email.link> 
```

### Image
```html
<x-laravel-email.img 
    src="dog.jpg"
    alt="dog"
    width="200"
    height="200"
/>

# Props
| Name   | Type   | Default | Description                        |
| ------ | ------ | ------- | ---------------------------------- |
| alt    | string |         | Alternate description for an image |
| src    | string |         | The path to the image              |
| width  | string |         | The width of an image in pixels    |
| height | string |         | The height of an image in pixels   |

```

### Divider
```html
<x-laravel-email.hr /> 
```

### Paragraph
```html
<x-laravel-email.text>Lorem Ipsum</x-laravel-email.text>
```

### Container
```html
<x-laravel-email.container>
    <x-laravel-email.link href="https://example.com" style="font-weight: 500; color: #0000;">
        Click here
    </x-laravel-email.link>
</x-laravel-email.container>
```

### Body
```html
 <x-laravel-email.html lang="en">
    <x-laravel-email.body style="background-color: rgba(37, 60, 172, 1);">
        <x-laravel-email.section>
            <x-laravel-email.column style="width: 50%">
                {{-- First column --}}
            </x-laravel-email.column>
            <x-laravel-email.column style="width: 50%">
                {{-- Second column --}}
            </x-laravel-email.column>
        </x-laravel-email.section>
    </x-laravel-email.body>
</x-laravel-email.html>
```

### Row
```html
<x-laravel-email.row>
    <x-laravel-email.column>A</x-laravel-email.column>
    <x-laravel-email.column>B</x-laravel-email.column>
    <x-laravel-email.column>C</x-laravel-email.column>
</x-laravel-email.row>
```

### Section
```html
{{-- A Simple Section --}}
<x-laravel-email.section>
    <x-laravel-email.text>Lorem Ipsum</x-laravel-email.text>
</x-laravel-email.section>

{{-- Formatted with `rows` and `columns` --}}
<x-laravel-email.section>
    <x-laravel-email.row>
        <x-laravel-email.column>Column 1, Row 1</x-laravel-email.column>
        <x-laravel-email.column>Column 2, Row 1</x-laravel-email.column>
    </x-laravel-email.row>

    <x-laravel-email.row>
        <x-laravel-email.column>Column 1, Row 2</x-laravel-email.column>
        <x-laravel-email.column>Column 2, Row 2</x-laravel-email.column>
    </x-laravel-email.row>
</x-laravel-email.section>
```

### Font
```html
<x-laravel-email.html lang="en">
   <x-laravel-email.head>
       <x-laravel-email.font
           font-family="Br Firma"
           fallback-font-family="Verdana"
           :web-font="[
                     'url' => 'https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0e.ttf',
                     'format' => 'truetype'
                ]"
           font-style="normal"
           font-weight="400"
       />
   </x-laravel-email.head> 
</x-laravel-email.html>
```

## Support
All components were tested using the most popular email clients.

| <img src="https://react.email/static/icons/gmail.svg" width="48px" height="48px" alt="Gmail logo"> | <img src="https://react.email/static/icons/apple-mail.svg" width="48px" height="48px" alt="Apple Mail"> | <img src="https://react.email/static/icons/outlook.svg" width="48px" height="48px" alt="Outlook logo"> | <img src="https://react.email/static/icons/yahoo-mail.svg" width="48px" height="48px" alt="Yahoo! Mail logo"> | <img src="https://react.email/static/icons/hey.svg" width="48px" height="48px" alt="HEY logo"> | <img src="https://react.email/static/icons/superhuman.svg" width="48px" height="48px" alt="Superhuman logo"> |
| -------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------ |
| Gmail ✔                                                                                           | Apple Mail ✔                                                                                           | Outlook ✔                                                                                             | Yahoo! Mail ✔                                                                                                | HEY ✔                                                                                         | Superhuman ✔                                                                                                |

## Development

#### Install dependencies

```sh
// PHP >= 8.1 is required

composer install
```

#### Tests
```sh
composer ci
```

## Credits

- React Email ([React Email](https://github.com/resendlabs/react-email))
- Bu Kinoshita ([@bukinoshita](https://twitter.com/bukinoshita))
- Zeno Rocha ([@zenorocha](https://twitter.com/zenorocha))

## License

MIT License

