<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Status;
use App\Models\User;
use App\Models\Attendance;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $users = User::where('is_support', 0)->get();
        // $support = User::where('is_support', 1)->get();
        $services = Service::all();
        foreach ($services as $service) {
        	Attendance::factory(1)->create([
        		'service_id' => $service->id,
                // 'user_id' => User::all()->random()->id
        	]);
        }
    }
}
