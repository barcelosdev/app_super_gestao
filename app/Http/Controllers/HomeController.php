<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello(Request $request)
    {
        return view('site.home');
    }
}
