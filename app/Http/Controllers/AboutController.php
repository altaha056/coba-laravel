<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function index(){
        return view('about', [
            "title" => "about", 
            "name" => "altaha", "email" => "altaha@alta.com", "image" => "img1.jpg",
            "active" => "about"
        ]);
    }
}
