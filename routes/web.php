<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

// Ruta raíz que redirige al listado (Opcional pero recomendado)
Route::get('/', function () {
    return redirect('/pacientes');
});

// REQUERIMIENTO DEL PDF: Usar Route::resource
Route::resource('pacientes', PacienteController::class);