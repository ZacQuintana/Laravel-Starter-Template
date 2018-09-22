<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        return view('home/index');
    }

    public function About(){
        return view('home/about');
    }

    public function Contact(){
        return view('home/contact');
    }
}
