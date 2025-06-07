<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->only('username' , 'password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'login' => 'Invalid crenditals',
        ]);
    }
}
