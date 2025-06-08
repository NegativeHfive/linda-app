<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->only('username' , 'password');

        if(Auth::attempt($credentials)){
            return redirect('/home');
        }

        return back()->withErrors([
            'login' => 'Invalid crenditals',
        ]);
    }

    public function register(Request $request){
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'username'=>$request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/')->with('success', 'Registration successful! Please log in.');
    }
}
