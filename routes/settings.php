<?php

use Illuminate\Support\Facades\Route;

Route::redirect('settings', '/settings/appearance');

Route::inertia('settings/appearance', 'settings/Appearance')->name('appearance.edit');
