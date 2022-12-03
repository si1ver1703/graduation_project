<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', \App\Http\Controllers\API\Product\IndexController::class);
Route::get('/categories', \App\Http\Controllers\API\Category\IndexController::class);
Route::get('/top_products', \App\Http\Controllers\API\Product\TopProductController::class);
