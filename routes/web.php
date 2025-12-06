<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ViewEvent;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/memberships', function () {
    return view('dashboard');
})->name('memberships');

Route::get('/payments', function () {
    return view('dashboard');
})->name('payments');

Route::get('/events', function () {
    return view('dashboard');
})->name('events');

Route::get('/communication', function () {
    return view('dashboard');
})->name('communication');

Route::get('/trash', function () {
    return view('dashboard');
})->name('trash');

Route::get('/settings', function () {
    return view('dashboard');
})->name('settings');

Route::get('/profile', function () {
    return view('dashboard');
})->name('profile');

Route::get('/help-center', function () {
    return view('dashboard');
})->name('help-center');




// Protected routes that require authentication
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/members', function () {
        return view('members.index');
    })->name('members');

    Route::get('/members/create', [App\Http\Controllers\MemberController::class, 'create'])->name('members.create');

    // Add more authenticated routes here
});



Route::view('/privacy-policy', 'legal.privacy')->name('privacy');
Route::view('/terms-of-use', 'legal.terms')->name('terms');
