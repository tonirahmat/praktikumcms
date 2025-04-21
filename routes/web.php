<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BPJSController;

Route::get('/BPJSs', [BPJSController::class, 'index']);
Route::get('/BPJSs/{id}', [BPJSController::class, 'show']);
Route::post('/BPJSs/register', [BPJSController::class, 'register']);
Route::post('/BPJSs/antrian', [BPJSController::class, 'antrian']);
