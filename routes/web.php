<?php

use App\Http\Controllers\Anggota\AnggotaController;
use App\Http\Controllers\bukuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [bukuController::class, 'index']);
Route::get('/adminPerpus', [bukuController::class, 'indexAdmin']);
Route::post('/adminPerpus/tambahBuku', [bukuController::class, 'add']);
Route::delete('/adminPerpus/deleteBuku{id}', [bukuController::class, 'destroy']);
Route::get('/adminPerpus/edit{id}', [bukuController::class, 'edit']);
Route::put('/adminPerpus/updateBuku/{id}', [bukuController::class, 'update']);

Route::get('/adminPerpus/peminjam',[bukuController::class,'indexPeminjam']);

// Route::get('/', function () {
//     return view('beranda');
// });


Route::get('/koleksi',[AnggotaController::class,'dashboard'])->name('anggota.koleksi');
Route::get('/tambah-anggota',[AnggotaController::class,'create'])->name('anggota.create');
Route::get('/anggota-tampil',[AnggotaController::class,'index'])->name('anggota.tampil');
Route::get('/anggota-edit/{anggota}',[AnggotaController::class,'edit'])->name('anggota.edit');

Route::post('/new',[AnggotaController::class,'store'])->name('anggota.store');
Route::post('/update/{anggota}',[AnggotaController::class,'update'])->name('anggota.update');
Route::delete('delete/{anggota}',[AnggotaController::class,'destroy'])->name('anggota.delete');
