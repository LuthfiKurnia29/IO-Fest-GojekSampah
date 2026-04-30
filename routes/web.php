<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisSampahController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CatalogController;

// Landing Page
Route::get('/', [BerandaController::class, 'index'])->name('landing-page');

// Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerProcess']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Forgot Password
Route::get('/lupa-password', [AuthController::class, 'lupaPassword']);
Route::post('/lupa-password', [AuthController::class, 'lupaPasswordProcess']);
Route::get('/email-terkirim', function () {
    return view('auth.email-terkirim-sukses');
});
Route::get('/ganti-password', [AuthController::class, 'gantiPassword']);

// Set Task Kurir
Route::post('/set-task', [TaskController::class, 'setTasksKurir'])->name('setTasksKurir');
Route::get('/get-task', [TaskController::class, 'getTasksKurir'])->name('getTasksKurir');
Route::post('/take-task', [TaskController::class, 'takeTask'])->name('takeTask');
Route::post('/complete-task', [TaskController::class, 'completeTask'])->name('completeTask');

// Jenis Sampah
Route::get('/jenis-sampah', [JenisSampahController::class, 'getJenisSampah'])->name('getJenisSampah');
Route::post('/jenis-sampah', [JenisSampahController::class, 'createJenisSampah'])->name('createJenisSampah');
Route::put('/jenis-sampah/{id}', [JenisSampahController::class, 'updateJenisSampah'])->name('updateJenisSampah');
Route::delete('/jenis-sampah/{id}', [JenisSampahController::class, 'deleteJenisSampah'])->name('deleteJenisSampah');

Route::middleware(['auth'])->group(function () {
    Route::get('/order-pengambilan', function () {
        return view('order.user.order-pengambilan');
    })->name('order-pengambilan');

    Route::get('/tugas-kurir', function () {
        return view('order.kurir.tugas-kurir');
    })->name('tugas-kurir');
});
