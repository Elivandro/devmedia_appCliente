<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
    ClienteController,
    HomeController,
};

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::resource('/clientes', ClienteController::class);