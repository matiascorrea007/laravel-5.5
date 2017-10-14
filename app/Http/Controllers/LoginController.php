<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class LoginController extends Controller
{


    

       public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }

}
