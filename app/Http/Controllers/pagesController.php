<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    
    public function home(){
        return view('home');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function code_editor(){
        $this->middleware('auth');
        return view('code_editor');
    }


    public function output(){
        return view('output');
    }


    public function wrong_answer(){
        return view('wrongAnswer');
    }
}
