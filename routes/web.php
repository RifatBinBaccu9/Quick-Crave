<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main-site.pages.home');
});
Route::get('/menu', function () {
    return view('main-site.pages.menu');
});
Route::get('/about', function () {
    return view('main-site.pages.about');
});
Route::get('/book', function () {
    return view('main-site.pages.book');
});
