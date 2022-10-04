@section('title', 'Newsletter')

<div class="flex flex-col justify-center px-8 min-h-screen bg-gray-300 dark:bg-secondary-300 pt-10">
    <div class="flex flex-col justify-center items-start max-w-2xl mx-auto mb-16">
        <h1 class="font-bold text-3xl md:text-5xl tracking-tight mb-4 text-secondary-400 dark:text-white">Newsletter</h1>
        <p class="text-secondary-200 pb-3 dark:text-gray-300 mb-4">My newsletter provides a behind-the-scenes look into what I'm working on and writing about. I frequently share some of my favorite articles I've read, as well as anything fascinating about technology.
        </p>
        @livewire('components.newsletter')
    </div>
</div>
