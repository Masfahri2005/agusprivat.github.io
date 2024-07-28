<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\PresensiController;

Route::get('/', function () {
    return view('welcome');
});

// ini route admin dashboard
Route::get('/Admin', [AdminController::class, 'index']);

// Route murid
Route::get('/murid', [MuridController::class, 'index'])->name('murid.index');
Route::get('/murid/create', [MuridController::class, 'create'])->name('murid.create');
Route::post('/murid', [MuridController::class, 'store'])->name('murid.store');
Route::get('/murid/{id}/edit', [MuridController::class, 'edit'])->name('murid.edit');
Route::put('/murid/{id}', [MuridController::class, 'update'])->name('murid.update');
Route::get('/murid/{id}', [MuridController::class, 'show'])->name('murid.show');
Route::delete('/murid/{id}', [MuridController::class, 'destroy'])->name('murid.destroy');

// Route Presensi
Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index');
Route::get('/presensi/create', [PresensiController::class, 'create'])->name('presensi.create');
Route::post('/presensi', [PresensiController::class, 'store'])->name('presensi.store');
Route::get('/presensi/{id}', [PresensiController::class, 'show'])->name('presensi.show');
Route::get('/presensi/{id}/download', [PresensiController::class, 'downloadPdf'])->name('presensi.downloadPdf');
Route::delete('/presensi/{id}', [PresensiController::class, 'destroy'])->name('presensi.destroy');





