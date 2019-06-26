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

Route::get('/', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('store-detail');
});

// for static page
Route::get('/about-us', function () {
    return view('about-us');
})->name('aboutus');
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contactus');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy_policy');

//category
Route::get('/category', function () {
    return view('category');
});