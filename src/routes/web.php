<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get('/livewire/livewire.js', $handle);
});

// Main routes
Route::get('/', function () {
    return view('front.show-home-page'); // Changed from show-home-page
})->name('home');

Route::get('/about', function () {
    return view('front.show-about'); // Changed from show-about
})->name('about');

Route::get('/profile', function () {
    return view('front.show-profile'); // Changed from show-profile
})->name('profile');