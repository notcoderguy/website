<div class="relative group">
    <div
        class="absolute -inset-0.5 -mx-3 bg-gradient-to-r from-indigo-500 to-blue-500 via-purple-500 animate-gradient-x rounded-lg blur opacity-75 group-hover:opacity-100 group-hover:duration-200">
    </div>

    <div
        class="relative border border-primary rounded p-6 my-4 w-full dark:border-secondary-400 bg-white dark:bg-secondary-400">
        <h5 class="text-lg md:text-xl font-bold text-gray-900 dark:text-gray-100">Subscribe to the newsletter</h5>

        @if (session()->has('success'))
            <div id="alert-success" class="flex p-4 mt-4 mb-4 bg-teal-100 rounded-lg" role="alert">
                <div class="text-sm font-medium bg-teal-100">
                    <p class="font-bold">Hooray! You're now on the list.</p>
                    <p class="text-sm">You'll receive an email from Revue to confirm your newsletter subscription.</p>
                </div>
                <button type="button" id="cls-btn"
                    class="ml-auto -mx-1.5 -my-1.5 bg-teal-100 text-teakl-500 rounded-lg focus:ring-2 focus:ring-teal-400 p-1.5 hover:bg-teal-200 inline-flex h-8 w-8"
                   aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <script>
                // target element that will be dismissed
                const targetEl = document.getElementById('alert-success');

                // options object
                const options = {
                    triggerEl: document.getElementById('cls-btn'),
                    transition: 'transition-opacity',
                    timing: 'ease-out',

                    // callback functions
                    onHide: (context, targetEl) => {
                        console.log('element has been dismissed')
                        console.log(targetEl)
                    }
                };

                const dismiss = new Dismiss(targetEl, options);
            </script>
        @endif
        @if (session()->has('error'))
            <div id="alert-error" class="flex mt-4 p-4 mb-4 bg-red-100 rounded-lg" role="alert">
                <div class="text-sm font-medium bg-red-100">
                    <p class="font-bold">Error while adding you on the list.</p>
                    <p class="text-sm">You are either already in the list or there was a service error.</p>
                </div>
                <button type="button" id="cls-btn"
                    class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-teakl-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <script>
                // target element that will be dismissed
                const targetEl = document.getElementById('alert-error');

                // options object
                const options = {
                    triggerEl: document.getElementById('cls-btn'),
                    transition: 'transition-opacity',
                    timing: 'ease-out',

                    // callback functions
                    onHide: (context, targetEl) => {
                        console.log('element has been dismissed')
                        console.log(targetEl)
                    }
                };

                const dismiss = new Dismiss(targetEl, options);
            </script>
        @endif

        <p class="my-1 text-gray-800 dark:text-gray-200">Get emails from me about web development, tech, and early
            access
            to new articles.</p>


        <form id="newsletter" wire:submit.prevent="addSubscriber" class="relative my-4" data-turbolinks="false">
            <input aria-label="me@mail.com" placeholder="me@mail.com" wire:model="email" name="email" type="email"
                required
                class="pl-4 pr-32 py-2 mt-1 focus:ring-primary focus:border-primary block w-full border-gray-300 rounded-md bg-gray-300 dark:bg-secondary-200 text-secondary-300 dark:text-gray-300">
            @error('email')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
            <button
                class="flex items-center justify-center absolute right-1 top-1 px-4 pt-1 font-medium h-8 bg-white dark:bg-secondary-400 text-secondary-400 dark:text-gray-300 rounded w-28"
                type="submit">
                Subscribe
            </button>
        </form>
        <p class="text-sm text-secondary-300 dark:text-gray-300">
            {{ $subscribers }} subscribers – <a href="https://digests.notcoderguy.com" target="_blank"
                rel="noopener noreferrer">View all issues</a></p>
        </p>
    </div>
</div>
