<?php

use App\Http\Controllers\SignUpLoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// home section
Route::get('/', [HomeController::class, 'home'])->name('home');

// menu section
Route::get('/menu', [MenuController::class, 'menu']);

// about section
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

// user Profile update section
Route::post('/user/profile/update', [SignUpLoginController::class, 'UserProfileUpdate'])->name('UserProfileUpdate');

// User Password Chenge section
Route::post('/user/profile/PasswordChenge', [SignUpLoginController::class, 'UserPasswordChenge'])->name('UserPasswordChenge');

// Admin section
Route::middleware(['admin'])->group(function (){
    // admin profile section
    Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('adminProfile');

    // Admin dashboard section
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
});

// User section
Route::middleware(['user'])->group(function (){
    // User Profile section
    Route::get('/user/profile', [UserController::class, 'UserProfile'])->name('UserProfile');

    // User dashboard section
    Route::get('/user', [UserController::class, 'user'])->name('user');
    
    // User booking section
    Route::get('/user/booking', [UserController::class, 'Userbooking'])->name('Userbooking');

});
