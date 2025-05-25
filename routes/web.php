<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorController;

Route::prefix('api')->middleware('api')->group(function () {
    Route::apiResource('genres', GenreController::class);
    Route::apiResource('authors', AuthorController::class);
});


