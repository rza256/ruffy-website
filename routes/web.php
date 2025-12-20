<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'welcome'])->name("ruffy.welcome");

// imagine there's a middleware here
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name("ruffy.home");
