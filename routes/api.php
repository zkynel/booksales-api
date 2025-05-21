<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/books', [BookController::class, 'index']);
// Route::get('/authors', [AuthorController::class, 'index']);

Route::prefix('genres')->group(function () {
    Route::get('/', [GenreController::class, 'index']);
    Route::post('/', [GenreController::class, 'store']);
});

// Group route untuk Author
Route::prefix('authors')->group(function () {
    Route::get('/', [AuthorController::class, 'index']);
    Route::post('/', [AuthorController::class, 'store']);
});
