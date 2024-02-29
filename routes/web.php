<?php

use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => true
]);

Route::group(['middleware' => ['auth']], function ()
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['middleware' => ['role:Admin']], function ()
    {
        //Pdf & Excell
          Route::get('bukus/export-excel', [BukuController::class, 'exportExcel'])->name('bukus.export-excel');
          Route::get('bukus/export-pdf', [BukuController::class, 'exportPDF'])->name('bukus.export-pdf');
          Route::resource('/bukus', BukuController::class);
          Route::get('/search', [BukuController::class, 'search'])->name('search');
        //pdf & Excel
        Route::resource('/users', UserController::class);
        Route::resource('/peminjamans', PeminjamanController::class);
        Route::resource('/anggotas', AnggotaController::class);
        Route::resource('/historis', HistoriController::class);
       // nama nama crud
    });
    Route::group(['middleware' => ['role:Petugas|Admin']], function ()
    {
        Route::resource('/bukus', BukuController::class);
        Route::resource('/peminjamans', PeminjamanController::class);
        Route::resource('/anggotas', AnggotaController::class);

    });
});


Route::resource('/peminjamans', PeminjamanController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
