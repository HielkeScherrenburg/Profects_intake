<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});

Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/show/{id}', [ProductController::class, 'show']);
    Route::put('/products/update/{id}', [ProductController::class, 'update']);
    Route::post('/products/store', [ProductController::class, 'store']);
    Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy']);
});
