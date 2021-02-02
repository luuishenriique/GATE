<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Criação de usuários separados
        \App\Models\User::factory(5)->create(['is_support' => 0]);
        \App\Models\User::factory(5)->create(['is_support' => 1]);
        // Criação de status únicos
        \App\Models\Status::factory(3)->create();
        $this->call([
        	EquipmentSeeder::class,
        	ServiceSeeder::class,
        	AttendanceSeeder::class,
        ]);
    }
}
