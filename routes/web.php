<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


Route::view('/about', 'about')->name('about');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/contact', 'contact')->name('contact');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');


Route::controller(UserController::class)->group(function () {
  Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login.show');
    Route::post('/login', 'login')->name('login.submit');
    Route::view('/register', 'auth.register')->name('register.show');
    Route::post('/register', 'register')->name('register.submit');
    Route::view('/forgot-password', 'forgotPassword')->name('password.request');
  });
  Route::middleware(['auth'])->group(function () {
    Route::view('/profile', 'profile')->name('profile');
    Route::view('/settings', 'settings')->name('settings');
    Route::post('/logout', 'logout')->name('logout');
  });
});




