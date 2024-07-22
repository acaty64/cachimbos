<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faculty::create(['siglas' => 'EEGG', 'area' => '-', 'descripcion' => 'CURSO GENERAL', 'decano' => 'NO EXISTE', ]);
        Faculty::create(['siglas' => 'FCEC', 'area' => 'A', 'descripcion' => 'CIENCIAS ECONOMICAS Y COMERCIALES', 'decano' => 'MG. JOSE ENRIQUE GUADALUPE AGUILAR MUÑOZ', ]);
        Faculty::create(['siglas' => 'FCEH', 'area' => 'B', 'descripcion' => 'CIENCIAS DE LA EDUCACION Y HUMANIDADES', 'decano' => 'SEÑORA MARIETTA ZORAIDA SOCORRO ARELLANO CABO', ]);
        Faculty::create(['siglas' => 'FCS', 'area' => 'C', 'descripcion' => 'CIENCIAS DE LA SALUD', 'decano' => 'DR. LUIS NAPOLEON QUIROZ AVILES', ]);
        Faculty::create(['siglas' => 'FI', 'area' => 'D', 'descripcion' => 'INGENIERIA', 'decano' => 'ING. PAOLA ARELLANO TUME', ]);
        Faculty::create(['siglas' => 'FCAA', 'area' => 'E', 'descripcion' => 'CIENCIAS AGRARIAS Y AMBIENTALES', 'decano' => 'ING. JUAN IGNACIO PASTEN MONARDEZ', ]);
        Faculty::create(['siglas' => 'POST', 'area' => 'F', 'descripcion' => 'ESCUELA DE POSTGRADO', 'decano' => 'WILFREDO JESUS LAFOSSE QUINTANA', ]);
        Faculty::create(['siglas' => 'FDCP', 'area' => 'G', 'descripcion' => 'DERECHO Y CIENCIAS POLITICAS', 'decano' => 'SEÑOR EDGAR ODON CRUZ ACUÑA', ]);
    }
}
