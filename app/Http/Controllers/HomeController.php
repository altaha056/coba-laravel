<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', ["title" =>
            "homepage",
            "active" => "home"]);
    }

    public function welcome()
    {
        return view('welcome', ["title" =>
            "welcome page",
            "active" => "home"]);
    }
}
