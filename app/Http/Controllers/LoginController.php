<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;

class LoginController extends Controller
{


        public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $user->getId();
        dd($user->getId());
        return ($user->getAvatar());
        // $user->token;
    }


       public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }

}
