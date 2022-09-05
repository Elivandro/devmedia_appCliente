<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
    ClienteController,
    HomeController,
};

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes');