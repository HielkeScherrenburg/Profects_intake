<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});

//Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
//    Route::get('/products', [ProductController::class, 'index']);
//    Route::get('/products/show/{id}', [ProductController::class, 'show']);
//    Route::put('/products/update/{id}', [ProductController::class, 'update']);
//    Route::post('/products/store', [ProductController::class, 'store']);
//    Route::delete('/products/destroy/{id}', [ProductController::class, 'destroy']);
//
//    Route::get('/categories', [CategoryController::class, 'index']);
//    Route::get('/categories/show/{id}', [CategoryController::class, 'show']);
//    Route::put('/categories/update/{id}', [CategoryController::class, 'update']);
//    Route::post('/categories/store', [CategoryController::class, 'store']);
//    Route::delete('/categories/destroy/{id}', [CategoryController::class, 'destroy']);
//});

Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/{id}', [ProductController::class, 'show']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);

    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/{id}', [CategoryController::class, 'show']);
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::put('/categories/{id}', [CategoryController::class, 'update']);
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);
});
