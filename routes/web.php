<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
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

});


