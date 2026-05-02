<?php

use App\Http\Controllers\OlympiadsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\PartnersController;
require __DIR__.'/admin.php';

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

});


