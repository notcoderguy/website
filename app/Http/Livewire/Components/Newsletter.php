<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;

class Newsletter extends Component
{
    public $subscribers;

    public $result;

    public $email;

    public function getRevueSubscribers()
    {
        if (Redis::exists('revue:subscribers' && Redis::ttl('revue:subscribers') > 0)) {
            $this->subscribers = count(Redis::get('revue:subscribers'));
        } else {
            $this->subscribers = Http::withHeaders([
                'Authorization' => 'Token ' . env('REVUE_API_KEY')
            ])->get('https://www.getrevue.co/api/v2/subscribers')->json();
            Redis::set('revue:subscribers', count($this->subscribers));
            Redis::expire('revue:subscribers', 3600);
        }
    }

    public function addSubscriber()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        $this->result = Http::withHeaders([
            'Authorization' => 'Token ' . env('REVUE_API_KEY'),
            'Content-Type' => 'application/json'
        ])->post('https://www.getrevue.co/api/v2/subscribers', [
            'email' => $this->email
        ])->json();

        $this->email = '';

        if (isset($this->result['error'])) {
            session()->flash('error', 'This email is already subscribed.');
        } else {
            session()->flash('success', 'You have been subscribed to the newsletter!');
        }
    }

    public function mount()
    {
        $this->getRevueSubscribers();

        $this->subscribers = Redis::get('revue:subscribers');

        return [
            'subscribers' => $this->subscribers,
        ];
    }

    public function render()
    {
        return view('livewire.components.newsletter');
    }
}
