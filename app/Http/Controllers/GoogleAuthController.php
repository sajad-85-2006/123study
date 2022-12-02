<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;


class GoogleAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $existUser = User::where('email', $googleUser->email)->first();

            if ($existUser) {
                \Illuminate\Support\Facades\Auth::loginUsingId($existUser->id);
            } else {
                $user = new \App\Models\User();
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1, 10000));
                $user->save();
                \Illuminate\Support\Facades\Auth::loginUsingId($user->id);
            }
            return redirect()->to('/panel/dashboard');
        } catch (Exception $e) {
            return 'error';
        }
    }
}
