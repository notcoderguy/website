<?php

namespace App\Http\Controllers;

use Exception;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function redirectToGithub()
    {
        // Redirect to Github
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback()
    {
        // Get the user from Github
        $githubUser = Socialite::driver('github')->user();

        // Find the user in the database
        if ($user = User::where('id', $githubUser->id)->first()) {
            // If the user exists, log them in
            Auth::login($user);
        } else {
            // If the user doesn't exist, create them
            $user = User::create([
                'id' => $githubUser->id,
                'name' => $githubUser->name,
                'email' => $githubUser->email,
                'username' => $githubUser->nickname,
                'avatar' => $githubUser->avatar,
            ]);

            $user = User::find($githubUser->id);

            // Log the user in
            Auth::login($user);
        }

        if (Auth::user()->user_type === 'admin') {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('guestbook');
        }
    }
}
