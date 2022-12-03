<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Markdom;

class Page extends Component
{
    public $page;

    public function mount($slug)
    {
        $this->page = Markdom::tohtml(file_get_contents(resource_path("views/pages/{$slug}.md")));

        if (! $this->page) {
            abort(404);
        }

        return [
            'page' => $this->page,
            'title' => ucfirst($slug),
        ];
    }

    public function render()
    {
        return view('livewire.page');
    }
}
