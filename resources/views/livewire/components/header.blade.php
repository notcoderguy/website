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
            <a href="" class="text-base font-medium text-primary hover:text-indigo-500"> About Me
            </a>
            <a href="" class="text-base font-medium text-primary hover:text-indigo-500">
                Contact Me </a>
            <a href="" class="text-base font-medium text-primary hover:text-indigo-500"> Blog </a>
            <a href="" class="text-base font-medium text-primary hover:text-indigo-500"> Projects
            </a>
            <a href="" class="text-base font-medium text-primary hover:text-indigo-500">
                GuestBook </a>

        </nav>
        <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
            <a href="{{ route('login') }}"
                class="whitespace-nowrap text-base font-medium text-primary hover:text-indigo-500"> Sign in </a>
            <a href="{{ route('register') }}"
                class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-secondary-400 bg-primary hover:bg-indigo-500">
                Sign up </a>
        </div>
    </div>

</div>
