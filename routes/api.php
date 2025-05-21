<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;

Route::get('/api/authors', [AuthorController::class, 'index']);
Route::post('/api/authors', [AuthorController::class, 'store']);

Route::get('/api/genres', [GenreController::class, 'index']);
Route::post('/api/genres', [GenreController::class, 'store']);

Route::get('api/books'  , [BookController::class, 'index']);