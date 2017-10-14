<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Socialite;

class SocialController extends Controller
{
   
    public function redirectToProvider(Request $request,$proveedor)
    {
        return Socialite::driver($proveedor)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback(Request $request,$proveedor)
    {
        $user = Socialite::driver($proveedor)->user();
        $id = $user->getId();
        $email =$user->getEmail();
        $nombre =$user->getName();
        $avatar =$user->getAvatar();

        dd($user);
      
        return ($user);
        // $user->token;
    }




}
