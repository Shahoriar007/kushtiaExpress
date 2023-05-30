<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('userSide.home');
    }

    public function contact()
    {
        return view('userSide.contact');
    }

    public function about()
    {
        return view('userSide.about');
    }
}
