<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\ReviewApiController;
use App\Http\Controllers\Api\FaqsApiController;

Route::apiResource('products', ProductApiController::class);
Route::apiResource('reviews', ReviewApiController::class);
Route::apiResource('faqs', FaqsApiController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
