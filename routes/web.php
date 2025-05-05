<?php

use App\Http\Controllers\BPJSController;

Route::get('/', [BPJSController::class, 'index'])->name('index');
Route::get('/bpjs/show', [BPJSController::class, 'show'])->name('bpjs.show');
Route::post('/bpjs/check', [BPJSController::class, 'check'])->name('bpjs.check');
Route::post('/bpjs/store', [BPJSController::class, 'store'])->name('bpjs.store');