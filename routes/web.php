<?php

use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\UserController;
use App\Models\buku;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes([  
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
        Route::get('/generate-barcode', [PeminjamanController::class, 'index'])->name('generate.barcode');
        Route::get('/generate-barcode', [BukuController::class, 'index'])->name('generate.barcode');
        Route::resource('/anggotas', AnggotaController::class);
        Route::resource('/historis', HistoriController::class);
    });
    Route::group(['middleware' => ['role:Petugas|Admin']], function ()
    {
        Route::resource('/bukus', BukuController::class);
        Route::resource('/peminjamans', PeminjamanController::class);
        Route::resource('/anggotas', AnggotaController::class);

    });

    Route::group(['middleware' => ['role:User|Admin']], function ()
    {
        Route::resource('/peminjamans', PeminjamanController::class);

    });


});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
