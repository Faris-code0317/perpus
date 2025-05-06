<?php

use App\Http\Controllers\Anggota\AnggotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});


Route::get('/dashboard',[AnggotaController::class,'dashboard'])->name('anggota.dashboard');
Route::get('/tambah-anggota',[AnggotaController::class,'create'])->name('anggota.create');
Route::get('/anggota-tampil',[AnggotaController::class,'index'])->name('anggota.tampil');
Route::post('/anggota-baru',[AnggotaController::class,'store'])->name('anggota.store');