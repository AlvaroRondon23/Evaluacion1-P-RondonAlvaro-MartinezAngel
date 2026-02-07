<?php

namespace Database\Seeders;

use App\Models\MascotasModelo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creamos los datos de ejemplo para el examen

        MascotasModelo::create([
            'apodo' => 'Rex',
            'edad' => 5,
            'peso' => 22.5,
            'ultimaCita' => '2026-02-01'
        ]);

        MascotasModelo::create([
            'apodo' => 'Pelusa',
            'edad' => 2,
            'peso' => 4.8,
            'ultimaCita' => '2026-01-20'
        ]);

        MascotasModelo::create([
            'apodo' => 'Bobby',
            'edad' => 8,
            'peso' => 15.0,
            'ultimaCita' => '2026-02-05'
        ]);
    }
}
