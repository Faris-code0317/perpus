<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukuController;

Route::get('/', [bukuController::class, 'index']);
