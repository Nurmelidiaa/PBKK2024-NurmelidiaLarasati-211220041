<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\InvoiceController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('penyewa', PenyewaController::class);
Route::resource('kendaraan', KendaraanController::class);
Route::resource('kwitansi', KwitansiController::class);
Route::resource('sewa', SewaController::class);
Route::resource('invoice', InvoiceController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
