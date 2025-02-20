<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web/home');
});
Route::get('/about', function () {
    return view('web/about');
});
Route::get('/dental-assistant', function () {
    return view('web/dental-assistant');
});
Route::get('/expanded-function-dental-assistant', function () {
    return view('web/expanded-function-dental-assistant');
});
Route::get('/coronal-polishing', function () {
    return view('web/coronal-polishing');
});
Route::get('/contact', function () {
    return view('web/contact');
});
Route::get('/payment-options', function () {
    return view('web/payment-options');
});
Route::get('/gallery', function () {
    return view('web/gallery');
});
Route::get('/schedule', function () {
    return view('web/schedule');
});
