<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/masuk');

Route::get('/masuk', [PageController::class, 'halamanLogin'])->name('login');
Route::post('/masuk', [PageController::class, 'cekLogin'])->name('login.cek');

Route::get('/beranda', [PageController::class, 'halamanBeranda'])->name('beranda');
Route::get('/kamar', [PageController::class, 'halamanKamar'])->name('kamar');
Route::get('/profil', [PageController::class, 'halamanProfil'])->name('profil');