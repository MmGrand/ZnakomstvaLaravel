<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'title' => 'Welcome to Inertia.js with Vue 3 and Vite',
    ]);
});
