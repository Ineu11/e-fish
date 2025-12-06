<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;

// Redirect root ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// Semua halaman setelah login
Route::middleware(['auth'])->group(function () {
    Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});

require __DIR__.'/auth.php';