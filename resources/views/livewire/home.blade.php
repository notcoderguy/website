@section('title', 'Home')

<div
    class="flex flex-col justify-center min-h-screen py-12 items-center bg-secondary-300 sm:px-6 lg:px-8 bg-gradient-to-r from-indigo-500 to-blue-500 via-purple-500
animate-gradient-x">

    <div class="flex items-center justify-center">
        <div class="flex flex-col justify-around">
            <div class="space-y-6">
                <a href="{{ route('home') }}">
                    <x-logo class="w-auto h-16 mx-auto text-secondary-300" />
                </a>
                <h1 class="text-5xl font-extrabold tracking-wider text-center text-secondary-300">
                    {{ config('app.name') }}
                </h1>
            </div>
        </div>
    </div>
</div>
