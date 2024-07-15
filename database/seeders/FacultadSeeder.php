<?php

namespace Database\Seeders;

use App\Models\Facultad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facultad::create(['siglas' => 'EEGG', 'area' => '-', 'descripcion' => 'CURSO GENERAL', 'decano' => 'NO EXISTE', ]);
        Facultad::create(['siglas' => 'FCEC', 'area' => 'A', 'descripcion' => 'CIENCIAS ECONOMICAS Y COMERCIALES', 'decano' => 'MG. JOSE ENRIQUE GUADALUPE AGUILAR MUÑOZ', ]);
        Facultad::create(['siglas' => 'FCEH', 'area' => 'B', 'descripcion' => 'CIENCIAS DE LA EDUCACION Y HUMANIDADES', 'decano' => 'SEÑORA MARIETTA ZORAIDA SOCORRO ARELLANO CABO', ]);
        Facultad::create(['siglas' => 'FCS', 'area' => 'C', 'descripcion' => 'CIENCIAS DE LA SALUD', 'decano' => 'DR. LUIS NAPOLEON QUIROZ AVILES', ]);
        Facultad::create(['siglas' => 'FI', 'area' => 'D', 'descripcion' => 'INGENIERIA', 'decano' => 'ING. PAOLA ARELLANO TUME', ]);
        Facultad::create(['siglas' => 'FCAA', 'area' => 'E', 'descripcion' => 'CIENCIAS AGRARIAS Y AMBIENTALES', 'decano' => 'ING. JUAN IGNACIO PASTEN MONARDEZ', ]);
        Facultad::create(['siglas' => 'POST', 'area' => 'F', 'descripcion' => 'ESCUELA DE POSTGRADO', 'decano' => 'WILFREDO JESUS LAFOSSE QUINTANA', ]);
        Facultad::create(['siglas' => 'FDCP', 'area' => 'G', 'descripcion' => 'DERECHO Y CIENCIAS POLITICAS', 'decano' => 'SEÑOR EDGAR ODON CRUZ ACUÑA', ]);
    }
}
