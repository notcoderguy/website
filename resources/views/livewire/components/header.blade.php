<div id="header" class="relative bg-gray-100 dark:bg-secondary-400" data-turbolinks-permanent>
    <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="{{ route('home') }}">
                <x-logo class="w-auto h-8 mx-auto text-primary" />
            </a>
        </div>

        <nav class="hidden md:flex space-x-10">

            <a href="{{ route('home') }}" class="text-base font-medium text-primary hover:text-indigo-500"> Home </a>
            <a href="{{ route('about') }}" class="text-base font-medium text-primary hover:text-indigo-500"> About Me
            </a>
            <a href="{{ route('newsletter') }}" class="text-base font-medium text-primary hover:text-indigo-500"
                data-turbolinks="false">
                Newsletter </a>
            <a href="{{ route('blog') }}" class="text-base font-medium text-primary hover:text-indigo-500"> Blog </a>
            <a href="{{ route('projects') }}" class="text-base font-medium text-primary hover:text-indigo-500"> Projects
            </a>
            <a href="{{ route('guestbook') }}" class="text-base font-medium text-primary hover:text-indigo-500"
                data-turbolinks="false">
                GuestBook </a>

        </nav>


        <div class="md:flex items-center justify-end md:flex-1 flex flex-row lg:w-0">
            <button id="theme-toggle">
                <div type="button"
                    class="text-secondary-200 dark:text-gray-300 bg-gray-300 hover:bg-gray-200  dark:bg-secondary-200 dark:hover:bg-secondary-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 moon">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                </div>
                <div type="button"
                    class="text-secondary-200 dark:text-gray-300 bg-gray-300 hover:bg-gray-200  dark:bg-secondary-200 dark:hover:bg-secondary-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 sun">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </div>
            </button>

            <div class="-mr-2 -my-2 md:hidden pl-2 pr-2">
                <button data-collapse-toggle="navbar-default" type="button"
                    class="text-secondary-200 dark:text-gray-300 bg-gray-300 hover:bg-gray-200  dark:bg-secondary-200 dark:hover:bg-secondary-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>


    </div>

</div>

<div class="hidden md:hidden w-auto relative bg-gray-200 dark:bg-secondary-200 p-5" data-turbolinks-permanent id="navbar-default">
    <ul
        class="flex flex-col p-4 bg-gray-100 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-base md:font-medium md:border-0 md:bg-gray-100 dark:bg-secondary-400 md:dark:bg-secondary-400 dark:border-secondary-300">
        <li>
            <a href="{{ route('home') }}"
                class="block py-2 pr-4 pl-3 text-white bg-primary rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                aria-current="page">Home</a>
        </li>
        <li>
            <a href="{{ route('about') }}"
                class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
        </li>
        <li>
            <a href="{{ route('newsletter') }}"
                class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                data-turbolinks="false">Newsletter</a>
        </li>
        <li>
            <a href="{{ route('blog') }}"
                class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blog</a>
        </li>
        <li>
            <a href="{{ route('projects') }}"
                class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Projects</a>
        </li>
        <li>
            <a href="{{ route('guestbook') }}"
                class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                data-turbolinks="false">GuestBook</a>
        </li>
    </ul>
</div>
