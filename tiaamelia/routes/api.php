<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::post('/register', [AuthApiController::class, 'register']);
Route::post('/login', [AuthApiController::class, 'login']);


//Test API Resource tanpa autentiksai
Route::middleware('auth:sanctum')->group(function () {

    // Informasi user yang sedang login
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Logout
    Route::post('/logout', [AuthApiController::class, 'logout']);

    Route::apiResource('products', ProductController::class);

});
