<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\FaqController;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/login', function () {
    return view('auth.login');
})->middleware(['auth', 'verified'])->name('login');


require __DIR__.'/auth.php';


Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
Route::post('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::get('/verification', [AdminController::class, 'showVerification'])->name('custom.verification.form');
Route::post('/verification', [AdminController::class, 'verificationVerify'])->name('custom.verification.verify');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
});


// Product control routes
Route::middleware('auth')->group(function () {

    // Review
    Route::controller(ReviewController::class)->group(function() {
        Route::get('/all/Review', 'allReview')->name('all.review');
        Route::get('/add/Review', 'addReview')->name('add.review');
        Route::post('/store/Review', 'storeReview')->name('store.review');
        Route::get('/edit/Review/{id}', 'editReview')->name('edit.review');
        Route::post('/update/Review', 'updateReview')->name('update.review');
        Route::get('/delete/Review/{id}', 'deleteReview')->name('delete.review');
    });
    //Product
    Route::controller(ProductController::class)->group(function() {
        Route::get('/all/Product', 'allProduct')->name('all.product');
        Route::get('/add/Product', 'addProduct')->name('add.product');
        Route::post('/store/Product', 'storeProduct')->name('store.product');
        Route::get('/edit/Product/{id}', 'editProduct')->name('edit.product');
        Route::post('/update/Product', 'updateProduct')->name('update.product');
        Route::get('/delete/Product/{id}', 'deleteProduct')->name('delete.product');
    });
    // Faqs
    Route::controller(FaqController::class)->group(function() {
        Route::get('/all/Faq', 'allFaq')->name('all.faq');
        Route::get('/add/Faq', 'addFaq')->name('add.faq');
        Route::post('/store/Faq', 'storeFaq')->name('store.faq');
        Route::get('/edit/Faq/{id}', 'editFaq')->name('edit.faq');
        Route::post('/update/Faq', 'updateFaq')->name('update.faq');
        Route::get('/delete/Faq/{id}', 'deleteFaq')->name('delete.faq');
    });
});


Route::get('/test-cloudinary', function () {
    $upload = Cloudinary::upload(public_path('test.jpg'));
    return $upload->getSecurePath();
});
