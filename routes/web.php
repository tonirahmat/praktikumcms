<?php

use App\Http\Controllers\BPJSController;
use App\Http\Controllers\ImageController;

Route::get('/', [BPJSController::class, 'index'])->name('index');
Route::get('/bpjs/show', [BPJSController::class, 'show'])->name('bpjs.show');
Route::post('/bpjs/check', [BPJSController::class, 'check'])->name('bpjs.check');
Route::post('/bpjs/store', [BPJSController::class, 'store'])->name('bpjs.store');

Route::get('/bpjs/hasil', [BpjsController::class, 'hasil'])->name('bpjs.hasil');
Route::get('/bpjs/hasil', [BpjsController::class, 'hasil'])->name('bpjs.hasil');

Route::get('/upload', [ImageController::class, 'create'])->name('bpjs.upload');
Route::post('/upload', [ImageController::class, 'store'])->name('image.upload');
Route::delete('/upload/{id}', [ImageController::class, 'destroy'])->name('image.destroy');