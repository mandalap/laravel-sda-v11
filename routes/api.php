<?php

use App\Http\Controllers\DetailsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/midtrans-callback', [DetailsController::class, 'callback']);
