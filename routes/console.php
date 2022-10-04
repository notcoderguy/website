<?php

use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('assign:admin {username}', function ($username) {
    $user = \App\Models\User::where('username', $username)->first();
    if ($user) {
        if ($user->user_type === 'admin') {
            $this->comment('User '. $username . ' is already an admin.');
        } else {
            $user->user_type = 'admin';
            $user->save();
            $this->comment('User '. $username . ' is now an admin.');
        }
    } else {
        $this->error('User ' . $username . ' not found.');
    }
})->purpose('Assign a user to admin');