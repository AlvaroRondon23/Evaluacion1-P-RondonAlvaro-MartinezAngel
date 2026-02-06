<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paciente; // IMPORTANTE: Importamos el modelo

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Creamos los datos de ejemplo para el examen
        Paciente::create([
            'apodo' => 'Rex',
            'edad' => 5,
            'peso' => 22.5,
            'ultima_cita' => '2026-02-01'
        ]);

        Paciente::create([
            'apodo' => 'Pelusa',
            'edad' => 2,
            'peso' => 4.8,
            'ultima_cita' => '2026-01-20'
        ]);

        Paciente::create([
            'apodo' => 'Bobby',
            'edad' => 8,
            'peso' => 15.0,
            'ultima_cita' => '2026-02-05'
        ]);
    }
}