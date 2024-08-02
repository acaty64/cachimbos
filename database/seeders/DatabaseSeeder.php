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
        $this->call(CareerSeeder::class);
        $this->call(FacultySeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(PostulantSeeder::class);
        $this->call(IncomingSeeder::class);
        $this->call(ChargeSeeder::class);
    }
}
