<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ViewEvent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

Route::get('/register', function () {
    return view('auth.signup');
})->name('register');

Route::view('/privacy-policy', 'legal.privacy')->name('privacy');
Route::view('/terms-of-use', 'legal.terms')->name('terms');
