<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Master',
            'email' => 'master@example.com',
        ]);
        $this->call(CargaSeeder::class);
        $this->call(FacultadSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(PostulanteSeeder::class);
        $this->call(IngresanteSeeder::class);
        // $this->call(CarreraSeeder::class);
    }
}
