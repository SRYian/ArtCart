<?php


use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SellerDashBoardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProductsController::class, 'index'])->name('product_detail');
Route::post('/cart', [ProductsController::class, 'add'])->name('add_cart');

//Route::get('/product', function () {
//    return view('products.main');
//});

//Route::get('/home', function () {
//    return view('home.main');
//});



Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [AuthenticationController::class, 'store'])->name('login');

Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/store', function () {
    return view('store.main');
});

Route::get('/cart', [CartController::class, 'index'])->name('buyer_cart');
Route::get('/delivery', [DeliveryController::class, 'ViewAll'])->name('buyer_delivery');
Route::post('/delivery', [DeliveryController::class, 'submitAction']);
Route::get('/payment', [PaymentController::class, 'ViewAll'])->name('buyer_payment');
Route::post('/payment', [PaymentController::class, 'SubmitAction']);


Route::get('/order', [OrderController::class, 'BuyerViewAll'])->name('buyer_order');
// Route untuk Seller
// TODO:Sesuaikan data dengan backend

Route::get('/seller', [ProductController::class, 'testViewAll'])->name('seller_product');
Route::get('/seller/product/edit/{ProductId:uuid}', [ProductController::class, 'Edit'])->name('seller_editproduct');
Route::post('/seller/product/edit/{ProductId:uuid}', [ProductController::class, 'EditAction']);

Route::get('/seller/add-coupon', [CouponController::class, 'Add'])->name('seller_addcoupon');
Route::post('/seller/add-coupon', [CouponController::class, 'AddAction']);
Route::get('/seller/add-product', [ProductController::class, 'Add'])->name('seller_addproduct');
Route::post('/seller/add-product', [ProductController::class, 'AddAction']);
Route::get('/seller/order', [OrderController::class, 'SellerViewAll'])->name('seller_order');
