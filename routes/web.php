<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\NecessaryDocumentController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OlympiadsController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\PartnersController;
require __DIR__.'/admin.php';

use App\Http\Controllers\ContactController;
//require __DIR__.'/admin.php';


Route::get('/', function() {

    return redirect(app()->getLocale());
});
Route::group([
    'prefix' => '{locale}',
    'middleware' => 'setLocale'
], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/information', [InformationController::class, 'index'])->name('info');
    Route::get('/history', [HistoryController::class, 'index'])->name('history');
    Route::get('/documents', [DocumentsController::class, 'index'])->name('documents');
    Route::get('/partners', [PartnersController::class, 'index'])->name('partners');
    Route::get('/olympiads', [OlympiadsController::class, 'index'])->name('olympiads');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::get('/library', [LibraryController::class, 'index'])->name('library');
    Route::get('/professions', [ProfessionController::class, 'index'])->name('professions');
    Route::get('/procedure', [ProcedureController::class, 'index'])->name('procedure');
    Route::get('/necessary_documents', [NecessaryDocumentController::class, 'index'])->name('necessary_documents');
    Route::get('/news', [NewsController::class, 'index'])->name('news');
    Route::get('/videos', [VideoController::class, 'index'])->name('videos');
    Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements');
});


