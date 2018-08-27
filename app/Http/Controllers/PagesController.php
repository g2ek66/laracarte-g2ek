<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('laracarte/welcome');
    }

    public function about()
    {
        return view('laracarte/about');
    }
}
