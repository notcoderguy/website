<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;

class Spotify extends Component
{
    public $currentTrack = [
        'title' => 'Not Playing',
        'url' => '',
    ];

    // public $response;

    public $token;

    // public $nextRefreshIn;

    // public $redisImport;

    // protected $listeners = ['getNextTrack' => 'getCurrentTrack'];

    public function getResponse()
    {

        if (Redis::exists('spotify:token') && Redis::ttl('spotify:token') > 0) {
            $this->token = Redis::get('spotify:token');
        } else {
            $this->token = Http::withHeaders([
                'Authorization' => 'Basic ' . base64_encode(env('SPOTIFY_CLIENT_ID') . ':' . env('SPOTIFY_CLIENT_SECRET'))
            ])->asForm()->post('https://accounts.spotify.com/api/token', [
                'grant_type' => 'refresh_token',
                'refresh_token' => env('SPOTIFY_REFRESH_TOKEN')
            ])->json()['access_token'];
            Redis::set('spotify:token', $this->token);
            Redis::expire('spotify:token', 3600);
        }


        $this->response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get('https://api.spotify.com/v1/me/player/currently-playing')->json();

        return $this->response;
    }

    public function getCurrentTrack()
    {
        $data = $this->getResponse();

        try {
            if ($data['is_playing'] == true) {
                $this->currentTrack['title'] = $data['item']['name'];
                $this->currentTrack['url'] = $data['item']['external_urls']['spotify'];
            }
        } catch (\Throwable $th) {
            $this->currentTrack['title'] = 'Not Playing';
            $this->currentTrack['url'] = '';
        }
    }

    public function mount()
    {
        $this->getCurrentTrack();

        return [
            'currentTrack' => $this->currentTrack,
            // 'nextRefreshIn' => $this->nextRefreshIn
        ];
    }

    public function render()
    {
        return view('livewire.components.spotify');
    }
}
