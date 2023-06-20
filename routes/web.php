<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\SellerDashBoardController;
use App\Http\Controllers\ProductController;
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

Route::get('/payment', function () {
    return view('cart.payment');
});

Route::get('/order', [OrderController::class, 'BuyerViewAll'])->name('buyer_order');
// Route untuk Seller
// TODO:Sesuaikan data dengan backend
Route::get('/seller', [ProductController::class, 'testviewall'])->name('seller_product');
Route::get('/seller/product/edit/{ProductId:uuid}', [ProductController::class, 'testeditid'])->name('seller_editproduct');

Route::get('/seller/add-coupon', function () {
    return view('seller.add-coupon');
});
Route::get('/seller/add-product', [ProductController::class, 'Add'])->name('seller_addproduct');
Route::get('/seller/order', [OrderController::class, 'SellerViewAll'])->name('seller_order');
