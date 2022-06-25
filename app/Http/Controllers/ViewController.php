<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        return view('layout.home');
    }
    public function book()
    {
        return view('layout.booking');
    }
    public function join()
    {
        return view('layout.join');
    }

    public function clinics()
    {
        return view('layout.clinic');
    }

    public function about()
    {
        return view('layout.about');
    }

    public function contact()
    {
        return view('layout.contact');
    }

    public function user()
    {
        return view('layout.user');
    }
    public function clinic()
    {
        return view('layout.singleclinck');
    }
    
     
}

