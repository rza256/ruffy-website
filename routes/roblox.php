<?php

use Illuminate\Support\Facades\Route;

// Client routes
Route::prefix('/thumbs')->group(function() {
    Route::post('/avatar.ashx', [\App\Http\Controllers\ThumbnailController::class, 'avatar'])->name("roblox.cdn.avatar");
    Route::post('/asset.ashx', [\App\Http\Controllers\ThumbnailController::class, 'asset'])->name("roblox.cdn.asset");
});
