<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


Route::view('/', 'home')->name('home');
Route::view('/shop', 'shop')->name('shop');
Route::view('/about', 'about')->name('about');
Route::view('/cart', 'cart')->name('cart');
Route::view('/product', 'product')->name('product');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/contact', 'contact')->name('contact');


Route::controller(UserController::class)->group(function () {
  Route::get('/login', 'auth.login')->name('login');
  Route::get('/register', 'auth.register')->name('register');
});

Route::middleware(['auth'])->group(function () {
  Route::view('/profile', 'profile')->name('profile');
  Route::view('/settings', 'settings')->name('settings');
  Route::get('/logout', function () {
    auth()->logout();
    return redirect()->route('home');
  })->name('logout');
});
