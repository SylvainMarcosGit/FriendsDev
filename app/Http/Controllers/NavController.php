<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    //

    public function accueil()
    {
      
        return view('index');
   
    }
    public function contact()
    {

        return  view('contact');
    }

    public function apropos()
    {

        return  view('apropos');
    }
}
