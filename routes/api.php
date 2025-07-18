<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\ReviewApiController;
use App\Http\Controllers\Api\FaqsApiController;
use App\Http\Controllers\Api\AuthController;

Route::apiResource('products', ProductApiController::class);
Route::apiResource('reviews', ReviewApiController::class);
Route::apiResource('faqs', FaqsApiController::class);

Route::group(['namespace' => 'App\Http\Controllers\Api'], function () {
    // --------------- Register and Login ----------------//
    Route::post('register', [AuthController::class, 'register'])->name('api.register');
    Route::post('login', [AuthController::class, 'login'])->name('api.login');
    
    // ------------------ Get Data ----------------------//
    Route::middleware('auth:api')->group(function () {
        Route::get('get-user', [AuthController::class, 'userInfo'])->name('api.get-user');
        Route::post('logout', [AuthController::class, 'logOut'])->name('api.logout');
        Route::apiResource('products', ProductApiController::class);
    });
});