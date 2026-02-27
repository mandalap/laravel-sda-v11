<?php

use App\Http\Controllers\Affiliate\AffiliasiController;
use App\Http\Controllers\Affiliate\AffiliateController;
use App\Http\Controllers\Affiliate\BookingController;
use App\Http\Controllers\Affiliate\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CekBookingController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ListCityController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Affiliate\ProfileController as AffiliateProfileController;
use App\Http\Controllers\Affiliate\TransactionController;
use App\Http\Controllers\Developer\RegisterController as DeveloperRegisterController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SajadaBerdasiController;
use App\Http\Controllers\SajadaJakselController;

// ============================================
// GUEST ROUTES
// ============================================
Route::middleware('guest')->group(function () {
    Route::redirect('/', '/login');

    Route::get('/login', [RegisterController::class, 'login'])->name('login');
    Route::post('login', [RegisterController::class, 'loginStore'])->name('store.login');

    // Daftar
    Route::get('/daftar', [RegisterController::class, 'daftar'])->name('daftar');
    Route::get('/daftar/{slug}', [RegisterController::class, 'daftarWithReff'])->name('daftar.with.reff');
    Route::post('/daftar-submit', [RegisterController::class, 'storeRegister'])->name('store.register');

    // Password
    Route::get('/lupa-password', [RegisterController::class, 'lupaPassword'])->name('lupapassword');
    Route::post('/reset-password', [RegisterController::class, 'resetPassword'])->name('resetpassword');
});

// ============================================
// AFFILIATE ROUTES - Not Registered
// ============================================
Route::middleware(['auth:member', 'check.agency.registered'])->group(function () {
    Route::get('/get-kota', [AffiliateController::class, 'getKota'])->name('get-kota');

    Route::prefix('affiliate')->name('affiliate.')->group(function () {
        Route::get('/', [AffiliateController::class, 'index'])->name('index');
        Route::get('/daftar', [AffiliateController::class, 'daftar'])->name('daftar');
        Route::post('/daftar-submit', [AffiliateController::class, 'store'])->name('daftar.store');
    });
});

// ============================================
// AFFILIATE ROUTES - Registered & Approved
// ============================================
Route::middleware(['auth:member', 'check.agency'])->group(function () {
    Route::prefix('affiliate')->name('affiliate.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Profile
        Route::get('/profil', [AffiliateProfileController::class, 'index'])->name('profile.index');
        Route::put('/profil/update', [AffiliateProfileController::class, 'update'])->name('profile.update');

        // Riwayat Booking
        Route::get('/riwayat-booking', [AffiliateProfileController::class, 'riwayatBooking'])->name('profile.riwayatBooking');
        Route::get('/riwayat-booking/{invoice}', [AffiliateProfileController::class, 'detailBooking'])->name('profile.riwayatBooking.detail');

        // Booking Affiliate
        Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
        Route::get('/booking/{project}', [BookingController::class, 'detail'])->name('booking.detail');
        Route::post('/booking/checkout/{project}', [BookingController::class, 'checkout'])->name('booking.checkout');
        Route::post('/booking/checkout/{project}/store', [BookingController::class, 'checkoutStore'])->name('booking.checkout.store');

        // Link Affiliasi
        Route::get('/affiliasi', [AffiliasiController::class, 'index'])->name('affiliasi.index');

        // Transaksi
        Route::get('/transaksi', [TransactionController::class, 'index'])->name('transaction.index');
    });
});

// ============================================
// DEVELOPER ROUTES - Register
// ============================================
Route::middleware('auth:member')->group(function () {
    Route::prefix('kerjasama')->name('developer.')->group(function () {
        Route::get('/', [DeveloperRegisterController::class, 'index'])->middleware('prevent.duplicate.developer')->name('index');
        Route::get('/daftar', [DeveloperRegisterController::class, 'register'])->middleware('prevent.duplicate.developer')->name('register');
        Route::post('/daftar/store', [DeveloperRegisterController::class, 'registerStore'])->name('register.store');
        Route::get('/status', [DeveloperRegisterController::class, 'pending'])
            ->name('pending');
    });
});

// ============================================
// DEVELOPER ROUTES - Approved
// ============================================
Route::middleware(['auth:member', 'check.developer'])->group(function () {
    Route::prefix('kerjasama')->name('developer.')->group(function () {
        // Add developer routes here
    });
});

// ============================================
// PUBLIC ROUTES - SPECIFIC FIRST
// ============================================

// Bank Search
Route::get('/bank-search', [AffiliateProfileController::class, 'search'])->name('bank.search');

// Beranda
Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');

// Cek Booking
Route::get('/cek-booking', [CekBookingController::class, 'index'])->name('check-booking');
Route::post('/cek-booking/hasil-pencarian', [CekBookingController::class, 'caribooking'])->name('cari-booking');

// Cari
Route::get('/cari-properti', [PencarianController::class, 'index'])->name('cari-properti');
Route::match(['get', 'post'], '/find-properti', [PencarianController::class, 'findproperti'])->name('findproperti');

// Sajada Berdasi
Route::get('/sajada-berdasi', [SajadaBerdasiController::class, 'index'])->name('sajada.berdasi');

// Sajada Jaksel
Route::get('/sajada-jaksel', [SajadaJakselController::class, 'index'])->name('sajada.jaksel');

// List City - SPECIFIC ROUTES
Route::get('/lihat-semua', [ListCityController::class, 'lihat'])->name('lihatsemua');
Route::get('/lihat-properti', [ListCityController::class, 'lihatproperti'])->name('lihatproperti');
Route::get('/lihat-kota', [ListCityController::class, 'lihatkota'])->name('lihatkota');
Route::get('/properti', [ListCityController::class, 'properti'])->name('properti');

// ============================================
// AUTHENTICATED MEMBER ROUTES
// ============================================
Route::middleware('auth:member')->group(function () {

    // ====== PROFILE ROUTES - HARUS DI ATAS ======
    Route::get('/akun', [ProfilController::class, 'index'])->name('profil');
    Route::get('/profil', [ProfilController::class, 'detail'])->name('detail.profil');
    Route::put('/profil-update', [ProfilController::class, 'updateProfil'])->name('update.profil');

    Route::get('/password', [ProfilController::class, 'password'])->name('index.password');
    Route::put('/password-update', [ProfilController::class, 'updatePassword'])->name('update.password');

    // ====== RIWAYAT BOOKING - SPESIFIK ROUTES ======
    Route::get('/riwayat-booking', [ProfilController::class, 'riwayatBooking'])->name('riwayat.booking');
    Route::get('/riwayat-booking/{invoice}', [ProfilController::class, 'detailBooking'])->name('riwayat.booking.detail');

    // ====== BOOKING INFO & CHECKOUT ======
    Route::get('/{jenis}/{kategori}/{project}/info', [DetailsController::class, 'custinfo'])->name('custinfo');
    Route::post('/checkout/{project}', [DetailsController::class, 'checkout'])->name('checkout');
    Route::post('/get-snap-token', [DetailsController::class, 'getSnapToken'])->name('getSnapToken');

    // ====== CONTACT ADMIN ======
    Route::get('/{jenis}/{kategori}/{project}/contact-admin', [DetailsController::class, 'contactAdmin'])->name('detailproject.contact');
});

// ============================================
// Properti
// ============================================

// List Properti 
Route::get('/properti/{kategoriSlug}', [PropertyController::class, 'index'])->name('properti.index');

// All Kategori
Route::get('/properti', [PropertyController::class, 'index'])->name('properti.all');

// Details - 3 segments - PALING BAWAH
Route::get('/{jenis}/{kategori}/{project}', [DetailsController::class, 'index'])->name('detailproject');

require __DIR__ . '/auth.php';
