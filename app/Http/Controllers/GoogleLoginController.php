<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleLogin()
    {
        $googleUser = Socialite::driver('google')->user();


        return redirect('/')->with('success', 'Login successfully');
    }

    public function changeGoogleLoginCredential(Request $request)
    {
        return redirect('/dashboard')->with('success', 'Google login credential changed successfully');
    }
}
