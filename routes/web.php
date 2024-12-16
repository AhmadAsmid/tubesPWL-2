<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('/admin/cabang', AdminController::class);
});
Route::middleware(['auth', 'role:manajer'])->group(function () {
    Route::get('/manajer/laporan', [ManajerController::class, 'laporan']);
});
