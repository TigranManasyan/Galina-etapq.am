<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;

// Route::get('/', function () {
//     return redirect('/hy');
// });

Route::middleware(['web'])->group( function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/information', [InformationController::class, 'index'])->name('info');

});
