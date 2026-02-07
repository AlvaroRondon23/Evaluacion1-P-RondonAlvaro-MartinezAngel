<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotasController;

Route::resource('mascotas', MascotasController::class);

Route::get('/', [MascotasController::class, 'index']);
