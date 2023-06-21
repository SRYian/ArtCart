<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\SellerDashboardController;
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

Route::post('/login', [AuthenticationController::class, 'store'])->name('login');

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

Route::get('/payment', function () {
    return view('cart.payment');
});


Route::get('/order', function () {
    return view('order.main');
});
// Route untuk Seller
// TODO:Sesuaikan data dengan backend

//Route::get('/seller', function () {
//    return view('seller.main');
//});

Route::get('/seller', [SellerDashboardController::class, 'index'])->name('seller_dashboard');

//Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/seller/add-coupon', function () {
    return view('seller.add-coupon');
});
Route::get('/seller/add-product', function () {
    return view('seller.add-product');
});
Route::get('/seller/order', function () {
    return view('seller.order');
});
