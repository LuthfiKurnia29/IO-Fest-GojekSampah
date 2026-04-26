<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;

Route::get('/', [BerandaController::class, 'index']);

Route::get('/login', [AuthController::class, 'login']);
