<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Equipment;
use App\Models\Service;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Teste de suporte
        $users = User::where('is_support', 1)->get();
        foreach ($users as $user) {
        	Equipment::factory(2)->create([
        		'user_id' => $user->id
        	]);
        }
    }
}
