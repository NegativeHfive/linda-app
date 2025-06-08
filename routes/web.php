<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/add',function(){
    return view('add');
});

Route::get('/about',function(){
    return view('about');
});

//Route::get('/', [App\Http\Controllers\LoginController::class, 'showLoginForm']);
Route::post('/register', [App\Http\Controllers\LoginController::class, 'register']);
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);

Route::get('/add', [ProductController::class, 'showAddForm']);
Route::post('/add', [ProductController::class, 'store']);
Route::get('/shop', [ProductController::class, 'index']);
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');