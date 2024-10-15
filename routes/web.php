<?php

use App\Http\Controllers\SignUpLoginController;
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

Route::get('/signup', [SignUpLoginController::class, 'signup']);
Route::post('/signup/push', [SignUpLoginController::class, 'signupPush'])->name('signupPush');


Route::get('/login', [SignUpLoginController::class, 'login'])->name('login');

Route::get('/admin', function (){
    return view('admin-site.pages.dashboard');
});

