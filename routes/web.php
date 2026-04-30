<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;

Route::get('/', [BerandaController::class, 'index']);

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerProcess']);

Route::get('/lupa-password', [AuthController::class, 'lupaPassword']);
Route::post('/lupa-password', [AuthController::class, 'lupaPasswordProcess']);
Route::get('/email-terkirim', function () {
    return view('auth.email-terkirim-sukses');
});
Route::get('/ganti-password', [AuthController::class, 'gantiPassword']);

Route::get('/order-pengambilan', function () {
    return view('order.user.order-pengambilan');
});