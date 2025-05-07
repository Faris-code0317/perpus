<?php

use App\Http\Controllers\Anggota\AnggotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});


Route::get('/koleksi',[AnggotaController::class,'dashboard'])->name('anggota.koleksi');
Route::get('/tambah-anggota',[AnggotaController::class,'create'])->name('anggota.create');
Route::get('/anggota-tampil',[AnggotaController::class,'index'])->name('anggota.tampil');
Route::get('/anggota-edit/{anggota}',[AnggotaController::class,'edit'])->name('anggota.edit');

Route::post('/new',[AnggotaController::class,'store'])->name('anggota.store');
Route::post('/update/{anggota}',[AnggotaController::class,'update'])->name('anggota.update');
Route::delete('delete/{anggota}',[AnggotaController::class,'destroy'])->name('anggota.delete');
