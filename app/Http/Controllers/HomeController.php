<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.homepage');
    }

    public function login(){
        return view('login.login');
    }
}
