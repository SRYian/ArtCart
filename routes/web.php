<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home.main');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/products', function () {
    return view('products.main');
});

Route::get('/store', function () {
    return view('store.main');
});

Route::get('/cart', function () {
    return view('cart.main');
});

Route::get('/delivery', function () {
    return view('cart.delivery');
});
