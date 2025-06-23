<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControler;
use App\Http\Controllers\VisaController;


Route::get('/register', [AuthControler::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthControler::class, 'register']);

Route::get('/login', [AuthControler::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthControler::class, 'login']);

Route::post('/logout', [AuthControler::class, 'logout'])->name('logout');

Route::view('/', 'acceuil')->name('acceuil');

Route::post('/visa-check', [VisaController::class, 'check'])->name('visa.check');
