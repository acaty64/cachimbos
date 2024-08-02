<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Career::create([
            'fac' => 'FCEC',
            'car' => 'ADM',
            'descripcion' => 'ADMINISTRACION',
        ]);
        Career::create([
            'fac' => 'FCEC',
            'car' => 'CON',
            'descripcion' => 'CONTABILIDAD',
        ]);
        Career::create([
            'fac' => 'FCEC',
            'car' => 'ECO',
            'descripcion' => 'ECONOMIA',
        ]);
    }
}
