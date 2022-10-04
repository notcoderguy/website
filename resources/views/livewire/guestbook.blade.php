@section('title', 'Guestbook')

<div class="flex flex-col justify-center px-8 min-h-screen bg-gray-300 dark:bg-secondary-300 pt-10">
    <div class="flex flex-col justify-center items-start max-w-2xl mx-auto mb-16">
        <h1 class="font-bold text-3xl md:text-5xl tracking-tight mb-4 text-secondary-400 dark:text-white">Guestbook</h1>
        <p class="text-secondary-200 pb-3 dark:text-gray-300 mb-4">Leave a comment below. It could be anything –
            appreciation,
            information, wisdom, or even humor. Surprise me!
        </p>

        <div class="relative group">
            <div
                class="absolute -inset-0.5 -mx-3 bg-gradient-to-r from-indigo-500 to-blue-500 via-purple-500 animate-gradient-x rounded-lg blur opacity-75 group-hover:opacity-100 group-hover:duration-200">
            </div>

            <div data-turbo="false"
                class="relative border border-primary rounded p-6 my-4 w-full dark:border-secondary-400 bg-white dark:bg-secondary-400">
                <h5 class="text-lg md:text-xl font-bold text-gray-900 dark:text-gray-100">Sign the Guestbook</h5>
                <p class="my-1 text-gray-800 dark:text-gray-200">Share a message for a future visitor of my site.</p>

                @if (session()->has('success'))
                    <div class="bg-teal-100 my-6 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                            <div>
                                <p class="font-bold">Hooray! You signed on the website.</p>
                                <p class="text-sm">Thank you for leaving behind a mark of your visit. This will definitely go down in history.</p>
                            </div>
                        </div>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="bg-red-100 my-6 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                            <div>
                                <p class="font-bold">Error while adding your signature in hall of fame.</p>
                                <p class="text-sm">How about you try again after a few minutes.</p>
                            </div>
                        </div>
                    </div>
                @endif


                @if (Auth::check())
                    <form id="guest-sign" class="relative my-4" wire:submit.prevent="storeSign">
                        <input aria-label="Your sign"
                            placeholder="Your sign..." required wire:model="sign" name="sign" type="text"
                            class="pl-4 pr-32 py-2 mt-1 focus:ring-primary focus:border-primary block w-full border-gray-300 rounded-md bg-gray-300 dark:bg-secondary-200 text-secondary-300 dark:text-gray-300">
                            @error('sign')
                            <span class="text-red-400">{{ $message }}</span>
                            @enderror
                        <button
                            class="flex items-center justify-center absolute right-1 top-1 px-4 pt-1 font-medium h-8 bg-white dark:bg-secondary-400 text-secondary-400 dark:text-gray-300 rounded w-28"
                            type="submit">Sign</button>
                    </form>
                @else
                    <a href="{{ route('github') }}"
                        class="flex items-center justify-center my-4 font-bold h-8 bg-gray-300 dark:bg-secondary-200 text-secondary-400 dark:text-gray-300 rounded w-28">Login</a>
                @endif


                <p class="text-sm text-secondary-300 dark:text-gray-300">Your information is used to display your name
                    and
                    reply by email. For more information read <a class="text-primary hover:text-indigo-500"
                        href="{{ route('page', 'privacy') }}">Privacy Policy</a>.</p>
            </div>
        </div>

        <div class="pt-12"></div>
        @foreach ($signs as $sign)
            <div class="mt-4">
                <div class="flex p-4 justify-center items-start mx-auto max-w-2xl break-all">
                    <div class="flex-shrink-0 mr-3">
                        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10" src="{{ $sign['user']['avatar'] }}"
                            alt="">
                    </div>
                    <div
                        class="flex-1 border-primary bg-white dark:border-secondary-400 dark:bg-secondary-400 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                        @if ($sign['user']['name'])
                            <a href="https://github.com/{{ $sign['user']['username'] }}/" target="_blank"
                                class="text-secondary-400 dark:text-white"> {{ $sign['user']['name'] }} </a>
                        @else
                            <a href="https://github.com/{{ $sign['user']['username'] }}" target="_blank"
                                class="text-secondary-400 dark:text-white"> {{ $sign['user']['username'] }} </a>
                        @endif
                        <span class="text-secondary-400 dark:text-white"> &bull; </span>
                        <span
                            class="text-xs text-secondary-400 dark:text-white">{{ $sign['created_at']->diffForHumans() }}</span>
                        <p class="dark-secondary-200 dark:text-gray-300 text-sm">
                            {{ $sign['message'] }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
