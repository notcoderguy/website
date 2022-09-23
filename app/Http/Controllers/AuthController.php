<?php

namespace App\Http\Controllers;

use Exception;
use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
        } catch (Exception $e) {
            return redirect()->route('guestbook');
        }

        if (User::count() === 0) {
            $newUser = new User;
            $newUser->id = $user->id;
            $newUser->name = $user->name;
            $newUser->username = $user->nickname;
            $newUser->email = $user->email;
            $newUser->avatar = $user->avatar;
            $newUser->user_type = 'admin';
            $newUser->github_token = $user->token;
            $newUser->github_refresh_token = $user->refreshToken;
            $newUser->save();

            Auth::login($newUser, true);
        } else {
            $existingUser = User::where('email', $user->email)->first();

            if ($existingUser) {
                Auth::login($existingUser, true);
            } else {
                $newUser = new User;
                $newUser->id = $user->id;
                $newUser->name = $user->name;
                $newUser->username = $user->nickname;
                $newUser->email = $user->email;
                $newUser->avatar = $user->avatar;
                $newUser->github_token = $user->token;
                $newUser->github_refresh_token = $user->refreshToken;
                $newUser->save();

                Auth::login($newUser, true);
            }
        }

        return redirect()->route('guestbook');
    }
}
