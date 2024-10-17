<?php

use App\Http\Controllers\SignUpLoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/menu', [MenuController::class, 'menu']);

Route::get('/about', [AboutController::class, 'about']);

// book section
Route::get('/book', [BookController::class, 'book']);
Route::post('/book/push', [BookController::class, 'bookPush'])->name('bookPush');

// signup section
Route::get('/signup', [SignUpLoginController::class, 'signup'])->name('signup');
Route::post('/signup/push', [SignUpLoginController::class, 'signupPush'])->name('signupPush');

// login section
Route::get('/login', [SignUpLoginController::class, 'login'])->name('login');
Route::post('/login/check', [SignUpLoginController::class, 'loginCheck'])->name('loginCheck');

// logout section
Route::get('/logout', [SignUpLoginController::class, 'logout'])->name('logout');


Route::get('/admin', [AdminController::class, 'admin'])->name('admin')->middleware('admin');

Route::get('/user', [UserController::class, 'user'])->name('user')->middleware('user');
Route::get('/user/booking', [UserController::class, 'Userbooking'])->name('Userbooking');

