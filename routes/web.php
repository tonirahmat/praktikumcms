<?php

use App\Http\Controllers\BPJSController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AuthController;

Route::get('/', [BPJSController::class, 'index'])->name('index');
Route::get('/bpjs/show', [BPJSController::class, 'show'])->name('bpjs.show');
Route::post('/bpjs/store', [BPJSController::class, 'store'])->name('bpjs.store');

Route::get('/upload', [ImageController::class, 'create'])->name('bpjs.upload');
Route::post('/upload', [ImageController::class, 'store'])->name('image.upload');
Route::delete('/upload/{id}', [ImageController::class, 'destroy'])->name('image.destroy');

Route::get('/cek-pendaftar', [BPJSController::class, 'formCekPendaftar'])->name('form.cek.pendaftar');
Route::get('/cek-pendaftar/search', [BPJSController::class, 'cekPendaftar'])->name('bpjs.cek');

Route::delete('/bpjs/delete/{id}', [BPJSController::class, 'destroy'])->name('bpjs.destroy');

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman utama
Route::get('/index', function () {
    return view('bpjs.index');
})->middleware('auth')->name('index');
