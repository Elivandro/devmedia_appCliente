<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ {
    HomeController,
    ClienteController,
    PhoneController,
};

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::resource('cliente', ClienteController::class);
Route::resource('cliente.phones',PhoneController::class)->shallow();
