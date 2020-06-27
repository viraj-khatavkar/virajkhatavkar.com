<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('google_analytics')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:site_name" content="virajkhatavkar.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Get Personal Finance Insights (Indian Context)" />
    <meta property="og:description" content="I plan to dive deep into a specific piece of personal finance every week. Get these insights directly in your inbox." />
    <meta property="og:image" content="{{ asset('/images/viraj-current.jpg') }}" />
    <meta property="og:site_name" content="virajkhatavkar.com" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Get Personal Finance Insights (Indian Context)">
    <meta name="twitter:description" content="I plan to dive deep into a specific piece of personal finance every week. Get these insights directly in your inbox.">
    <meta name="twitter:image" content="{{ asset('/images/viraj-current.jpg') }}">
    <meta name="twitter:site" content="@virajkhatavkar">
    <meta name="twitter:creator" content="@virajkhatavkar">

    <title>Get Personal Finance Insights - Viraj Khatavkar</title>

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
        <div class="mt-12">
            <div class="mt-8">
                <script async data-uid="d0e1b9e4ea" src="https://colossal-knitter-1148.ck.page/d0e1b9e4ea/index.js"></script>
            </div>
        </div>

    </div>
</body>
</html>
