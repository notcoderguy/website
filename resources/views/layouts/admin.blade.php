<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @hasSection('title')
        <title>@yield('title') | {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#1e2124">
    <meta name="apple-mobile-web-app-title" content="NotCoderGuy">
    <meta name="application-name" content="NotCoderGuy">
    <meta name="msapplication-TileColor" content="#1e2124">
    <meta name="msapplication-TileImage" content="{{ asset('mstile-144x144.png') }}">
    <meta name="theme-color" content="#1e2124">

    @livewireStyles
    @livewireScripts
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="font-poppin min-h-screen flex bg-gray-300 dark:bg-secondary-200">
    @livewire('admin.components.sidebar')
    <div class="flex flex-col w-screen h-screen justify-between">
        @livewire('admin.components.header')
        <div class="flex-grow overflow-scroll">
            @yield('content')
        
            @isset($slot)
                {{ $slot }}
            @endisset
        </div>
        @livewire('admin.components.footer')
    </div>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N9BJ77TMEY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-N9BJ77TMEY');
    </script>
</body>

</html>
