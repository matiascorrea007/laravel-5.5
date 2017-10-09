<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Debugbar; //Debugbar::info($user);
use Auth;
use Hashids;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        Debugbar::info();


        return view('admin.index');
    }
}
