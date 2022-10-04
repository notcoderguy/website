@section('title', 'About')

@section('content')
    <section class="bg-gray-300 text-secondary-200 dark:bg-secondary-200 dark:text-gray-300 flex-grow">
        <div class="container px-5 py-24 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div
                            class="relative group w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-800 text-gray-600">
                            <div
                                class="absolute -inset-0.5 -mx-3 bg-gradient-to-r from-indigo-500 to-blue-500 via-purple-500 animate-gradient-x blur opacity-75 group-hover:opacity-100 group-hover:duration-200 rounded-full">
                            </div>
                            <img src="{{ asset('img/itzme.jpeg') }}" alt="avatar" class="relative rounded-full">
                        </div>
                        <div class="flex flex-col items-center text-center justify-center">
                            <h2 class="font-medium mt-4 text-secondary-400 dark:text-white text-lg">Vasu Grover</h2>
                            <div class="w-12 h-1 bg-primary rounded mt-2 mb-4"></div>
                            <p class="text-secondary-400 dark:text-white">A passionate individual who loves to define logic
                                in applications and bringing the static art to life in games to create fun experience for
                                all the users.</p>
                        </div>
                    </div>
                    <div
                        class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-primary sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        <p class="leading-relaxed text-lg mb-4">Welcome to my website! This website serves as portfolio for
                            me to showcase my ideas and share some of my projects. It's a reflection of my career path and
                            interests - especially on the technical side of things. For more information, check out my <a
                                class="text-primary hover:text-indigo-500" href="https://www.linkedin.com/in/notcoderguy/">
                                Linkedin profile</a>. <br><br> I am proficient in C, C++, C#, Python and PHP. My current
                            interests are in the areas of game development and backend development so expect to see more of
                            these stuff in the future! This portfolio is bootstrapped from the awesome Tailwind CSS.
                            Inspiration for this website is <a class="text-primary hover:text-indigo-500"
                                href="https://github.com/leerob" target="_blank">Lee Robinson</a>.</p>
                        <a href="{{ route('blog') }}"
                            class="text-primary hover:text-indigo-500 inline-flex items-center">Read my Blogs
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
