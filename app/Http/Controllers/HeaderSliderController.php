<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderSliderController extends Controller
{
    public function headerSlider()
    {
        return view('adminSide.headerSlider');
    }
}
