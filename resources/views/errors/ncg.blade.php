<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') | {{ config('app.name') }}</title>

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

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="h-full">

    <div class="bg-gray-300 dark:bg-secondary-400 min-h-full flex flex-col lg:relative">
        <div class="flex-grow flex flex-col">
            <main class="flex-grow flex flex-col bg-gray-300 dark:bg-secondary-400">
                <div class="flex-grow mx-auto max-w-7xl w-full flex flex-col px-4 sm:px-6 lg:px-8">
                    <div class="flex-shrink-0 pt-10 sm:pt-16">
                        <a href="{{ route('home') }}" class="inline-flex">
                            <x-logo class="w-auto h-16 mx-auto text-primary" />
                        </a>
                    </div>
                    <div class="flex-shrink-0 my-auto py-16 sm:py-32">
                        <p class="text-sm font-semibold text-primary uppercase tracking-wide">@yield('code') error
                        </p>
                        <h1
                            class="mt-2 text-4xl font-extrabold text-secondary-200 dark:text-gray-400 tracking-tight sm:text-5xl">
                            @yield('message')
                        </h1>
                        <div class="mt-6">
                            <a href="{{ route('home') }}"
                                class="text-base font-medium text-primary hover:text-indigo-500">Go
                                back home<span aria-hidden="true"> &rarr;</span></a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="absolute inset-0 h-full w-full object-cover"
                src="https://source.unsplash.com/random/?code,coding,technology,programming" alt="">
        </div>
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
    <script type="text/javascript">
        // Theme Vars
        const userTheme = localStorage.getItem('theme')
        const systemTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'

        // Initial Theme Check
        const checkTheme = () => {
            if (userTheme === 'dark' || (!('theme' in localStorage) && systemTheme === 'dark')) {
                document.documentElement.classList.add('dark')
                return
            }
        }

        // Initial Theme Check
        checkTheme()
    </script>
</body>

</html>
