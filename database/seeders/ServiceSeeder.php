<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Equipment;
use App\Models\Service;
use App\Models\Attendance;
use App\Models\Status;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('is_support', 0)->get();
        $supports = User::where('is_support', 1)->get();
        $status = Status::where('id', '<', 3)->get();
        foreach ($users as $user) {
        	Service::factory(1)->create([
        		'user_id' => $user->id,
                'status_id' => $status->random()->id,
                'equipment_id' => Equipment::all()->random()->id,
                'support_id' => $supports->random()->id,
        	]);
        }
    }
}
