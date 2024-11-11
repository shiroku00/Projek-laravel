<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BuyController;

Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/jadwal', [HomeController::class, 'jadwal'])->name('jadwal');
Route::get('/order', [HomeController::class, 'order'])->name('order');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/kursi', [BuyController::class, 'kursi'])->name('kursi');


use App\Http\Controllers\Admin\AdminController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/pelanggan', [AdminController::class, 'pelanggan'])->name('pelanggan');
 
});
