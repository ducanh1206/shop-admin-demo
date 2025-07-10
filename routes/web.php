<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\FaqController;


Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', function () {
    return view('auth.login');
})->middleware(['auth', 'verified'])->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
Route::post('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/verification', [AdminController::class, 'showVerification'])->name('custom.verification.form');
Route::post('/verification', [AdminController::class, 'verificationVerify'])->name('custom.verification.verify');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
});

// Review control routes
Route::middleware('auth')->group(function () {
    Route::controller(ReviewController::class)->group(function() {

        Route::get('/all/Review', 'AllReview')->name('all.review');
        Route::get('/add/Review', 'AddReview')->name('add.review');
        Route::post('/store/Review', 'StoreReview')->name('store.review');
        Route::get('/edit/Review/{id}', 'EditReview')->name('edit.review');
        Route::post('/update/Review', 'UpdateReview')->name('update.review');
        Route::get('/delete/Review/{id}', 'DeleteReview')->name('delete.review');
    });
});

// Product control routes
Route::middleware('auth')->group(function () {
    Route::controller(ProductController::class)->group(function() {
        Route::get('/all/Product', 'AllProduct')->name('all.product');
        Route::get('/add/Product', 'AddProduct')->name('add.product');
        Route::post('/store/Product', 'StoreProduct')->name('store.product');
        Route::get('/edit/Product/{id}', 'EditProduct')->name('edit.product');
        Route::post('/update/Product', 'UpdateProduct')->name('update.product');
        Route::get('/delete/Product/{id}', 'DeleteProduct')->name('delete.product');
    });
});

// Faq control routes
Route::middleware('auth')->group(function () {
    Route::controller(FaqController::class)->group(function() {
        Route::get('/all/Faq', 'AllFaq')->name('all.faq');
        Route::get('/add/Faq', 'AddFaq')->name('add.faq');
        Route::post('/store/Faq', 'StoreFaq')->name('store.faq');
        Route::get('/edit/Faq/{id}', 'EditFaq')->name('edit.faq');
        Route::post('/update/Faq', 'UpdateFaq')->name('update.faq');
        Route::get('/delete/Faq/{id}', 'DeleteFaq')->name('delete.faq');
    });
});