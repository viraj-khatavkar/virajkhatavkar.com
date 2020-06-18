<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('google_analytics')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="virajkhatavkar.com">
    <meta property="og:locale" content="en_US">
    <meta name="og:title" content="{{ $article->title }}">
    <meta property="og:description" content="{{ $article->excerpt }}">
    <meta name="og:image" content="{{ $article->splash_image }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $article->title }}">
    <meta name="twitter:description" content="{{ $article->excerpt }}">
    <meta name="twitter:image" content="{{ $article->splash_image }}">
    <meta name="twitter:site" content="@virajinvests">
    <meta name="twitter:creator" content="@virajinvests">

    <title>Viraj Khatavkar</title>

    <!-- Tailwind -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="font-sans bg-white leading-tight antialiased">
    <div id="app" class="container mx-auto mt-12 lg:mt-32 w-3/4 lg:w-1/2 xl:w-1/3">
        <div class="flex items-center">
            <img src="{{ asset('/images/viraj-current.jpg') }}" class="h-12 w-12 rounded-full" alt="">
            <a href="/" class="text-black text-3xl md:text-4xl font-bold pl-2 md:pl-6 no-underline">
                Viraj Khatavkar
            </a>
        </div>
        @yield('content')

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/highlight.min.js" integrity="sha256-eOgo0OtLL4cdq7RdwRUiGKLX9XsIJ7nGhWEKbohmVAQ=" crossorigin="anonymous"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>
