<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/login', [App\Http\Controllers\LoginController::class, 'showLoginForm']);
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);