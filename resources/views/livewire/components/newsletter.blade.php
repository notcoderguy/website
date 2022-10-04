<div class="relative group">
    <div
        class="absolute -inset-0.5 -mx-3 bg-gradient-to-r from-indigo-500 to-blue-500 via-purple-500 animate-gradient-x rounded-lg blur opacity-75 group-hover:opacity-100 group-hover:duration-200">
    </div>

    <div
        class="relative border border-primary rounded p-6 my-4 w-full dark:border-secondary-400 bg-white dark:bg-secondary-400">
        <h5 class="text-lg md:text-xl font-bold text-gray-900 dark:text-gray-100">Subscribe to the newsletter</h5>

        @if (session()->has('success'))
            <div class="bg-teal-100 my-6 px-4 py-3 shadow-md" role="alert">
                <div class="flex">
                    <div>
                        <p class="font-bold">Hooray! You're now on the list.</p>
                        <p class="text-sm">You'll receive an email from Revue to confirm your newsletter subscription.</p>
                    </div>
                </div>
            </div>
        @endif

        @if (session()->has('error'))
        <div class="bg-red-100 my-6 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div>
                    <p class="font-bold">Error while adding you on the list.</p>
                    <p class="text-sm">You are either already in the list or there was a service error.</p>
                </div>
            </div>
        </div>
    @endif

        <p class="my-1 text-gray-800 dark:text-gray-200">Get emails from me about web development, tech, and early access
            to new articles.</p>


        <form wire:submit.prevent="addSubscriber" class="relative my-4" data-turbo="false">
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
