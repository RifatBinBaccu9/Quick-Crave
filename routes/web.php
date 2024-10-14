<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main-site.pages.home');
});
Route::get('/about', function () {
    return view('main-site.pages.about');
});
