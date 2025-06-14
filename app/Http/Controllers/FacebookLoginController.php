<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookLoginController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookLogin()
    {
        $facebookUser = Socialite::driver('facebook')->user();


        return redirect('/')->with('success', 'Login successfully');
    }

    public function changeFacebookLoginCredential(Request $request)
    {


        return redirect('/dashboard')->with('success', 'Facebook login credential changed successfully');
    }
}
