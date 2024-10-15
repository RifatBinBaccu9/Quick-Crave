<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);

Route::get('/menu', [MenuController::class, 'menu']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/book', [BookController::class, 'book']);
Route::post('/book/push', [BookController::class, 'bookPush'])->name('bookPush');

Route::get('/admin', function (){
    return view('admin-site.pages.dashboard');
});
Route::get('/signup', function (){
    return view('main-site.pages.signup');
});
Route::get('/login', function (){
    return view('main-site.pages.login');
});
