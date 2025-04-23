<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::redirect('/', '/login');

    Route::get('/login', [RegisterController::class, 'login'])
        ->name('login');

    Route::post('login', [RegisterController::class, 'loginStore'])
        ->name('store.login');

    // Daftar
    Route::get('/daftar', [RegisterController::class, 'daftar'])->name('daftar');
    Route::post('/daftar-submit', [RegisterController::class, 'storeRegister'])->name('store.register');

    // Password
    Route::get('/lupa-password', [RegisterController::class, 'lupaPassword'])->name('lupapassword');
    Route::post('/reset-password', [RegisterController::class, 'resetpassword'])->name('resetpassword');

    // Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    //     ->name('password.request');

    // Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    //     ->name('password.reset');

    // Route::post('reset-password', [NewPasswordController::class, 'store'])
    //     ->name('password.store');
});

Route::middleware('auth:member')->group(function () {
    Route::post('logout', [ProfilController::class, 'destroy'])
        ->name('logout');
});
