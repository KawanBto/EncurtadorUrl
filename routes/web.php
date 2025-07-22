<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

Route::get('/', [UrlController::class, 'index'])->name('home');
Route::post('/shorten', [UrlController::class, 'shorten'])->name('shorten');

Route::get('/{shortCode}', [UrlController::class, 'redirect'])->name('redirect');