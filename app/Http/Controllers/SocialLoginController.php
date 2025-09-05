<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendSocialLoginPassword;

use Illuminate\Support\Facades\Log;

class SocialLoginController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        if (request()->has('error')) {
            // User cancelled the login or permission was denied
            return redirect()->route('login')->with('error', 'Social login was cancelled.');
        }
        try {
            $socialUser = Socialite::driver($provider)->stateless()->user();
    
            $user = User::where('email', $socialUser->getEmail())->first();

            if (!$user) {
                $password = Str::random(12);
                $user = User::create([
                    'name' => $socialUser->getName() ?? $socialUser->getNickname(),
                    'email' => $socialUser->getEmail(),
                    'password' => bcrypt($password),
                    'provider' => $provider,
                    'provider_id' => $socialUser->getId(),
                ]);
                // Send the password via email
                Mail::to($user->email)->send(new SendSocialLoginPassword($user, $password));
            }

            Auth::login($user, true);
    
            return redirect()->route('/');
    
        } catch (\Exception $e) {
            Log::error("{$provider} login error: " . $e->getMessage());
            return redirect()->route('/')->with('error', 'Social login failed. Please try again.');
        }
    }
}
