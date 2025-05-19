<?php

use App\Http\Controllers\Affiliate\AffiliateController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CekBookingController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ListCityController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\ProfilController;
use App\Models\Affiliate;

// Sajada Affiliate
Route::middleware(['auth:member', 'check.agency.registered'])->group(function () {
    Route::get('/get-kota', [AffiliateController::class, 'getKota'])->name('get-kota');
    // Sajada Affiliate
    Route::prefix('affiliate')->name('affiliate.')->group(function () {
        Route::get('/', [AffiliateController::class, 'index'])->name('index');
        Route::get('/daftar', [AffiliateController::class, 'daftar'])->name('daftar');
        Route::post('/daftar-submit', [AffiliateController::class, 'store'])->name('daftar.store');

        Route::get('/home', [AffiliateController::class, 'home'])->name('home');
    });
});
Route::middleware(['auth:member', 'check.agency'])->group(function () {
    // Sajada Affiliate
    Route::prefix('affiliate')->name('affiliate.')->group(function () {
        Route::get('/home', [AffiliateController::class, 'home'])->name('home');
    });
});

// Beranda
Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');

/// List City
Route::get('/jual/{slug}', [ListCityController::class, 'kategori'])->name('kategori');
Route::get('/{kategori}/{cities}', [ListCityController::class, 'detailkategori'])->name('detailkategori');
Route::get('/lihat-semua', [ListCityController::class, 'lihat'])->name('lihatsemua');
Route::get('/lihat-properti', [ListCityController::class, 'lihatproperti'])->name('lihatproperti');

Route::get('/lihat-kota', [ListCityController::class, 'lihatkota'])->name('lihatkota');
Route::get('/properti', [ListCityController::class, 'properti'])->name('properti');
// Route::post('/find-properti', [PencarianController::class, 'findproperti'])->name('findproperti');


/// Details
Route::get('/{jenis}/{kategori}/{project}', [DetailsController::class, 'index'])->name('detailproject');

// Cek Booking
Route::get('/cek-booking', [CekBookingController::class, 'index'])->name('check-booking');
Route::post('/cek-booking/hasil-pencarian', [CekBookingController::class, 'caribooking'])->name('cari-booking');

// Cari
Route::get('/cari-properti', [PencarianController::class, 'index'])->name('cari-properti');
Route::match(['get', 'post'], '/find-properti', [PencarianController::class, 'findproperti'])->name('findproperti');

Route::middleware('auth:member')->group(function () {

    // Customer Boking Info
    Route::get('/{jenis}/{kategori}/{project}/info', [DetailsController::class, 'custinfo'])->name('custinfo');

    // Checkcout
    Route::post('/checkout/{project}', [DetailsController::class, 'checkout'])->name('checkout');
    Route::post('/get-snap-token', [DetailsController::class, 'getSnapToken'])->name('getSnapToken');

    // Profil
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
    Route::get('/profil-edit', [ProfilController::class, 'detail'])->name('detail.profil');
    Route::put('/profil-update', [ProfilController::class, 'updateProfil'])->name('update.profil');
    Route::get('/password', [ProfilController::class, 'password'])->name('index.password');
    Route::put('/password-update', [ProfilController::class, 'updatePassword'])->name('update.password');
    Route::get('/riwayat-booking', [ProfilController::class, 'riwayatBooking'])->name('riwayat.booking');
});


require __DIR__ . '/auth.php';
