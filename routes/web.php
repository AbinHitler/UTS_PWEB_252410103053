<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Redirect root ke login
Route::get('/', [PageController::class, 'login']);

// Halaman Login
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'prosesLogin'])->name('login.proses');

// Halaman Dashboard
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Halaman Profile
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
    
// Halaman Daftar Produk (Pengelolaan)
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

// Logout
Route::post('/logout', [PageController::class, 'logout'])->name('logout');
