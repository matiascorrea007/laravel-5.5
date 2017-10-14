<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Debugbar; //Debugbar::info($user);
use Auth;
use Hashids;
use Alert;

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

        
          Alert::success('Mensaje existoso', 'Creado');


        return view('admin.index');
    }
}
