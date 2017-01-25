<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('korakahome', function () {
    return view('fashion');
})->name('fashion');

Route::get('korakaproduk', function () {
    return view('produk');
})->name('produk');

Route::get('korakacart', function () {
    return view('cart');
})->name('cart');
