<?php

namespace App\Http\Livewire;

use App\Models\Guestbook as ModelsGuestbook;
use Exception;
use Livewire\Component;
use Nette\Schema\Expect;

class Guestbook extends Component
{
    public $sign;

    public $signs;

    public function storeSign()
    {
        try {
            $this->validate([
                'sign' => 'required|min:2',
            ]);
    
            $newSign = ModelsGuestbook::create([
                'user_id' => auth()->user()->id,
                'message' => $this->sign
            ]);
    
            $this->sign = '';
    
            session()->flash('success', 'Your sign has been posted!');
    
            $this->signs->push($newSign);
        } catch (Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }

    
    public function mount()
    {
        return [
            'signs' => $this->signs
        ];        
    }

    public function render()
    {
        $this->signs = \App\Models\Guestbook::orderBy('created_at', 'desc')->get();
        foreach ($this->signs as $sign) {
            $sign->user = \App\Models\User::find($sign->user_id);
        }

        return view('livewire.guestbook', [
            'signs' => $this->signs,
        ]);
    }

}
