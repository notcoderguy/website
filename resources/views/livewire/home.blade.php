@section('title', 'Home')

<div class="flex flex-col justify-center min-h-screen py-12 bg-secondary-300 sm:px-6 lg:px-8">

    <div class="flex items-center justify-center">
        <div class="flex flex-col justify-around">
            <div class="space-y-6">
                {{-- <iframe id="viewer" name="viewer" allow="fullscreen; xr-spatial-tracking;" style="display: unset;" src="{{ route('model') }}"></iframe> --}}
                <a href="{{ route('home') }}">
                    <x-logo class="w-auto h-16 mx-auto text-primary" />
                </a>
                <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-400">
                    {{ config('app.name') }}
                </h1>

            </div>
        </div>
    </div>
</div>
