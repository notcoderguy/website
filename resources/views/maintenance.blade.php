@section('title', 'Maintenance')

<div class="bg-gray-300 dark:bg-secondary-300 min-h-full flex flex-col lg:relative min-h-screen">
    <div class="flex-grow flex flex-col">
        <main class="flex-grow flex flex-col bg-gray-300 dark:bg-secondary-300">
            <div class="flex-grow mx-auto max-w-7xl w-full flex flex-col px-4 sm:px-6 lg:px-8">
                <div class="flex-shrink-0 pt-10 sm:pt-16">
                    <a href="{{ route('home') }}" class="inline-flex">
                        <x-logo class="w-auto h-16 mx-auto text-primary" />
                    </a>
                </div>
                <div class="flex-shrink-0 my-auto py-16 sm:py-32">
                    <p class="text-sm font-semibold text-primary uppercase tracking-wide">This page is currently under maintenance.</p>
                    <h1 class="mt-2 text-4xl font-extrabold text-secondary-200 dark:text-gray-400 tracking-tight sm:text-5xl">Maintenance
                    </h1>
                    <div class="mt-6">
                        <a href="{{ route('home') }}" class="text-base font-medium text-primary hover:text-indigo-500">Go
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