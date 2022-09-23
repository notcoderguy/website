<div class="relative bg-secondary-400">
    <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="{{ route('home') }}">
                <x-logo class="w-auto h-8 mx-auto text-primary" />
            </a>
        </div>
        <div class="-mr-2 -my-2 md:hidden pr-2">
            <button type="button"
                class="bg-secondary-100 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-secondary-200"
                aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <nav class="hidden md:flex space-x-10">

            <a href="{{ route('home') }}" class="text-base font-medium text-primary hover:text-indigo-500"> Home </a>
            <a href="{{ route('about') }}" class="text-base font-medium text-primary hover:text-indigo-500"> About Me
            </a>
            <a href="{{ route('newsletter') }}" class="text-base font-medium text-primary hover:text-indigo-500">
                Newsletter </a>
            <a href="{{ route('blog') }}" class="text-base font-medium text-primary hover:text-indigo-500"> Blog </a>
            <a href="{{ route('projects') }}" class="text-base font-medium text-primary hover:text-indigo-500"> Projects
            </a>
            <a href="{{ route('guestbook') }}" class="text-base font-medium text-primary hover:text-indigo-500">
                GuestBook </a>

        </nav>
        <div class="md:flex items-center justify-end md:flex-1 lg:w-0">
            <button id="theme-toggle" type="button"
                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5"><svg
                    id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg> <svg id="theme-toggle-light-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg></button>
        </div>
    </div>

</div>
