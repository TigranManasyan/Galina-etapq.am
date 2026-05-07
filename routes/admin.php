<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\LibraryController;
use App\Http\Controllers\Admin\VideoController;
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

        Route::prefix('library')->name('admin.library.')->group(function () {
            Route::get('/', [LibraryController::class, 'index'])->name('index');
            Route::get('/create', [LibraryController::class, 'create'])->name('create');
            Route::get('/edit/{id}', [LibraryController::class, 'edit'])->name('edit');
            Route::get('/delete/{id}', [LibraryController::class, 'destroy'])->name('destroy');
            Route::post('/store', [LibraryController::class, 'store'])->name('store');
            Route::post('/update/{id}', [LibraryController::class, 'update'])->name('update');
        });

        Route::prefix('articles')->name('admin.article.')->group(function () {
            Route::get('/', [ArticleController::class, 'index'])->name('index');
            Route::get('/create', [ArticleController::class, 'create'])->name('create');
            Route::get('/{id}/change/{status}', [ArticleController::class, 'change_status'])->name('changes_status');
            Route::get('/show/{id}', [ArticleController::class, 'show'])->name('show');
            Route::get('/delete/{id}', [ArticleController::class, 'destroy'])->name('destroy');
            Route::post('/store', [ArticleController::class, 'store'])->name('store');
            Route::post('/update/{id}', [ArticleController::class, 'update'])->name('update');
        });


        Route::prefix('announcements')->name('admin.announcement.')->group(function () {
            Route::get('/', [AnnouncementController::class, 'index'])->name('index');
            Route::get('/create', [AnnouncementController::class, 'create'])->name('create');
            Route::get('/{id}/change/{status}', [AnnouncementController::class, 'change_status'])->name('changes_status');
            Route::get('/show/{id}', [AnnouncementController::class, 'show'])->name('show');
            Route::get('/delete/{id}', [AnnouncementController::class, 'destroy'])->name('destroy');
            Route::post('/store', [AnnouncementController::class, 'store'])->name('store');
            Route::post('/update/{id}', [AnnouncementController::class, 'update'])->name('update');
        });

        Route::prefix('videos')->name('admin.video.')->group(function () {
            Route::get('/', [VideoController::class, 'index'])->name('index');
            Route::get('/create', [VideoController::class, 'create'])->name('create');
            Route::get('/{id}/change/{status}', [VideoController::class, 'change_status'])->name('changes_status');
            Route::get('/show/{id}', [VideoController::class, 'show'])->name('show');
            Route::get('/delete/{id}', [VideoController::class, 'destroy'])->name('destroy');
            Route::post('/store', [VideoController::class, 'store'])->name('store');
            Route::post('/update/{id}', [VideoController::class, 'update'])->name('update');
        });

        Route::prefix('galleries')->name('admin.gallery.')->group(function () {
            Route::get('/', [GalleryController::class, 'index'])->name('index');
            Route::get('/create', [GalleryController::class, 'create'])->name('create');
            Route::get('/{id}/change/{status}', [GalleryController::class, 'change_status'])->name('changes_status');
            Route::get('/show/{id}', [GalleryController::class, 'show'])->name('show');
            Route::get('/delete/{id}', [GalleryController::class, 'destroy'])->name('destroy');
            Route::get('/attach/{gallery_id}', [GalleryController::class, 'attach_view'])->name('attach_view');
            Route::post('/attach', [GalleryController::class, 'attach'])->name('attach');
            Route::post('/store', [GalleryController::class, 'store'])->name('store');
            Route::post('/update/{id}', [GalleryController::class, 'update'])->name('update');
        });


        Route::prefix('images')->name('admin.image.')->group(function () {
            Route::get('/delete/{id}', [ImageController::class, 'delete'])->name('delete');
            Route::put('/update/{id}', [ImageController::class, 'update'])->name('update');

        });
    });
});


