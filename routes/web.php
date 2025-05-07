<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukuController;

Route::get('/', [bukuController::class, 'index']);
Route::post('/tambahBuku', [bukuController::class, 'add']);
Route::delete('/deleteBuku{id}', [bukuController::class, 'destroy']);
Route::get('/edit{id}', [bukuController::class, 'edit']);
Route::put('/updateBuku/{id}', [bukuController::class, 'update']);
