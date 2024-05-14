<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KwitansiController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/penyewa',\App\Http\Controllers\PenyewaController::class);
Route::resource('/kendaraan',\App\Http\Controllers\KendaraanController::class);
Route::resource('/kwitansi',\App\Http\Controllers\KwitansiController::class);