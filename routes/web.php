<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/blog/{id}', [HomeController::class, 'show'])->name('blog.show');


Route::get('/product/{id}', 'App\Http\Controllers\CheckoutController@product_details')->name('product.details');
Route::post('/add-to-cart/{id}', 'App\Http\Controllers\CheckoutController@add_cart')->name('add-to-cart');

Route::get('login_view', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login_view');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/checkout', 'App\Http\Controllers\CheckoutController@checkout')->name('checkout.submit');

Auth::routes();

// Protected routes requiring authentication
Route::group(['middleware' => ['auth']], function () {
    Route::resource('Item', ProductController::class);



});