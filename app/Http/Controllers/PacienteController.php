<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PacienteController extends Controller
{
    public function index()
    {
        // Traemos todos los pacientes de la base de datos
        $pacientes = Paciente::all();

        // Los enviamos a la vista 'pacientes.index'
        return view('pacientes.index', compact('pacientes'));
    }
}