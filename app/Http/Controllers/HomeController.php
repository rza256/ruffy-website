<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(Request $request)
    {
        return view('welcome');
    }

    public function home(Request $request)
    {
        return view('dashboard');
    }
}
