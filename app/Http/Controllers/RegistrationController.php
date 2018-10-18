<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{

    public function create(){
        return view('pages/login');
    }

    public function Store(){

        $this->validate(request(), [
            'name' => 'required',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/profile');
    }
}
