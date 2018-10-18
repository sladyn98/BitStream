<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    
    public function register(){
        return view('layouts/app');
    }

    public function dashboard(){
        return view('dashboard');
    }
}
