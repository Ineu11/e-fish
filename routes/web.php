<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Root redirect ke login
Route::redirect('/', '/login');

// Guest (belum login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

// Logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Admin
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        // Kelola Produk
        Route::resource('/produk', ProductController::class)->names('produk');

        // Kelola Order
        Route::resource('/order', OrderController::class)->names('order');


        // Kelola Pembeli
        Route::get('/pembeli', [AdminController::class, 'pembeli'])->name('pembeli.index');
        Route::post('/pembeli/activate/{id}', [AdminController::class, 'activatePembeli'])->name('pembeli.activate');
        Route::delete('/pembeli/delete/{id}', [AdminController::class, 'deletePembeli'])->name('pembeli.delete');


        Route::post('/order/status/{id}', [OrderController::class, 'updateStatus'])->name('order.status');
    });

// Pembeli
Route::middleware('auth')->group(function () {
    Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');
    

    Route::get('/order/{id}', [OrderController::class, 'create'])->name('order.create');
    Route::post('/order', [OrderController::class, 'store'])->name('order.store');
});
