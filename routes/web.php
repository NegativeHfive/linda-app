<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/show',function(){
    return view('show');
});

Route::get('/shop',function(){
    return view('shop');
});

//Route::get('/', [App\Http\Controllers\LoginController::class, 'showLoginForm']);
Route::post('/register', [App\Http\Controllers\LoginController::class, 'register']);
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);