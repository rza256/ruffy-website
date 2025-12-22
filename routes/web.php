<?php

use Illuminate\Support\Facades\Route;

require('roblox.php');

Route::get('/', [\App\Http\Controllers\HomeController::class, 'welcome'])->name("ruffy.welcome");

// imagine there's a middleware here
Route::prefix('/auth')->group(function() {
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name("ruffy.auth.login");
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name("ruffy.auth.register");
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name("ruffy.home");

    Route::prefix('/games')->group(function() {
        Route::get('/', [\App\Http\Controllers\Catalog\GamesController::class, 'home'])->name("ruffy.games.home");
    });

    Route::prefix('/develop')->group(function() {
        Route::get('/', [\App\Http\Controllers\Develop::class, 'home'])->name("ruffy.develop.home");
        Route::get('/create/{type}', [\App\Http\Controllers\Develop::class, 'createView'])->name("ruffy.develop.create");
        Route::post('/create/{type}', [\App\Http\Controllers\Develop::class, 'create'])->name("ruffy.develop.create");
    });
});
