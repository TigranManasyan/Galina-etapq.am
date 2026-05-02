<?php

use App\Http\Controllers\Admin\DocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AnnouncementController;

Route::prefix('admin')->group(function () {
//    Route::get('/', function () {
//        return "Admin panel";
//    });

    Route::get('/login', [AuthController::class, 'login_view'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.post');

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        Route::prefix('documents')->name('admin.document.')->group(function () {
            Route::get('/', [DocumentController::class, 'index'])->name('index');
            Route::get('/create', [DocumentController::class, 'create'])->name('create');
            Route::get('/edit/{id}', [DocumentController::class, 'edit'])->name('edit');
            Route::get('/delete/{id}', [DocumentController::class, 'destroy'])->name('destroy');
            Route::post('/store', [DocumentController::class, 'store'])->name('store');
            Route::post('/update/{id}', [DocumentController::class, 'update'])->name('update');
        });


        Route::prefix('announcements')->name('admin.announcement.')->group(function () {
            Route::get('/', [AnnouncementController::class, 'index'])->name('index');
            Route::get('/create', [AnnouncementController::class, 'create'])->name('create');
            Route::post('/store', [AnnouncementController::class, 'store'])->name('store');
        });
    });
});


