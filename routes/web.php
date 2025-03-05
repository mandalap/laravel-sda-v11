<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CekBookingController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ListCityController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;



// Beranda
Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');


/// List City
Route::get('/jual/{slug}', [ListCityController::class, 'kategori'])->name('kategori');
Route::get('/{kategori}/{cities}', [ListCityController::class, 'detailkategori'])->name('detailkategori');
Route::get('/lihat-semua', [ListCityController::class, 'lihat'])->name('lihatsemua');

Route::get('/lihat-kota', [ListCityController::class, 'lihatkota'])->name('lihatkota');
Route::get('/properti', [ListCityController::class, 'properti'])->name('properti');

/// Details
Route::get('/{jenis}/{kategori}/{project}', [DetailsController::class, 'index'])->name('detailproject');
Route::get('/{jenis}/{kategori}/{project}/info', [DetailsController::class, 'custinfo'])->name('custinfo');

// checkcout
Route::post('/checkout/{project}', [DetailsController::class, 'checkout'])->name('checkout');
/// Lihat Semua

// Profil
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/check-booking', [CekBookingController::class, 'index'])->name('check-booking');
Route::get('/cari-properti', [PencarianController::class, 'index'])->name('cara-properti');
