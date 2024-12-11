<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return 'Home Page';
});


Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'processSignup']);

Route::get('/signin', [AuthController::class, 'showSigninForm'])->name('signin');
Route::post('/signin', [AuthController::class, 'processSignin']);


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/blog/{slug}', function ($slug) {
    return 'Detail Blog untuk slug: ' . $slug;
});

Route::get('/category/{slug}', function ($slug) {
    return 'Articles in Category with Slug: ' . $slug;
});

Route::get('/author/{username}', function ($username) {
    return 'Articles by Author: ' . $username;
});

Route::get('/privacy-policy', function () {
    return 'Privacy Policy Page';
});

Route::get('/admin', function () {
    return "Admin Page";
})->middleware('auth');