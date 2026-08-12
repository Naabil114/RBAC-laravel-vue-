<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Dashboard')->name('home');
Route::inertia('dashboard', 'Dashboard')->name('dashboard');

require __DIR__.'/settings.php';
