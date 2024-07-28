<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MuridController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\AwalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ini route admin dashboard
Route::get('/Admin', [AdminController::class, 'index'])->middleware('auth');

// ini route Home Awal
Route::get('/awal', [AwalController::class, 'index'])->name('awal.index')->middleware('auth');
// Route::post('/awal', [AwalController::class, 'store'])->name('awal.store')->middleware('auth');

// Route murid
Route::get('/murid', [MuridController::class, 'index'])->name('murid.index')->middleware('auth');
Route::get('/murid/create', [MuridController::class, 'create'])->name('murid.create')->middleware('auth');
Route::post('/murid', [MuridController::class, 'store'])->name('murid.store')->middleware('auth');
Route::get('/murid/{id}/edit', [MuridController::class, 'edit'])->name('murid.edit')->middleware('auth');
Route::put('/murid/{id}', [MuridController::class, 'update'])->name('murid.update')->middleware('auth');
Route::get('/murid/{id}', [MuridController::class, 'show'])->name('murid.show')->middleware('auth');
Route::delete('/murid/{id}', [MuridController::class, 'destroy'])->name('murid.destroy')->middleware('auth');

// Route Presensi
Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index')->middleware('auth');
Route::get('/presensi/create', [PresensiController::class, 'create'])->name('presensi.create')->middleware('auth');
Route::post('/presensi', [PresensiController::class, 'store'])->name('presensi.store')->middleware('auth');
Route::get('/presensi/{id}', [PresensiController::class, 'show'])->name('presensi.show')->middleware('auth');
Route::get('/presensi/{id}/download', [PresensiController::class, 'downloadPdf'])->name('presensi.downloadPdf')->middleware('auth');
Route::delete('/presensi/{id}', [PresensiController::class, 'destroy'])->name('presensi.destroy')->middleware('auth');
Route::get('/presensi/{id}/edit', [PresensiController::class, 'edit'])->name('presensi.edit')->middleware('auth');
Route::put('/presensi/{id}', [PresensiController::class, 'update'])->name('presensi.update')->middleware('auth');

