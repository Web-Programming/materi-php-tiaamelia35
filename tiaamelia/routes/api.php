<?php

use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ── Route Publik (tanpa autentikasi) ──────────────────────────
Route::post('/register', [AuthApiController::class, 'register']);
Route::post('/login',    [AuthApiController::class, 'login']);


//Test API Resurce tanpa autentikasi
Route::middleware('auth:sanctum')->group(function () {
    // Informasi user yang sedang login
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Logout
    Route::post('/logout', [AuthApiController::class, 'logout']);

    // Resource API untuk produk (CRUD)
    Route::apiResource('products', ProductController::class);
});