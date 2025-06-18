<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;

// Auth routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::post('/admin/login', [AuthController::class, 'adminLogin']);
Route::post('/admin/logout', [AuthController::class, 'adminLogout'])->middleware(['auth:sanctum', 'admin']);

// Author routes
Route::get('/authors', [AuthorController::class, 'index']); // Read All
Route::get('/authors/{id}', [AuthorController::class, 'show']); // Show

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::post('/authors', [AuthorController::class, 'store']); // Create
    Route::put('/authors/{id}', [AuthorController::class, 'update']); // Update
    Route::delete('/authors/{id}', [AuthorController::class, 'destroy']); // Destroy
});

// Hanya customer yang sudah login
Route::middleware(['auth:sanctum', 'customer'])->group(function () {
    Route::post('/transaction', [TransactionController::class, 'store']);      // Create
    Route::put('/transaction/{id}', [TransactionController::class, 'update']); // Update
    Route::get('/transaction/{id}', [TransactionController::class, 'show']);   // Show
});

// Hanya admin
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/transaction', [TransactionController::class, 'index']);       // Read All
    Route::delete('/transaction/{id}', [TransactionController::class, 'destroy']); // Destroy
});

// Genre routes
Route::get('/genres', [GenreController::class, 'index']); // Read All
Route::get('/genres/{id}', [GenreController::class, 'show']); // Show

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::post('/genres', [GenreController::class, 'store']); // Create
    Route::put('/genres/{id}', [GenreController::class, 'update']); // Update
    Route::delete('/genres/{id}', [GenreController::class, 'destroy']); // Destroy
});