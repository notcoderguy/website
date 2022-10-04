<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;

class Newsletter extends Component
{    
    public function render()
    {
        return view('livewire.newsletter');
    }
}
