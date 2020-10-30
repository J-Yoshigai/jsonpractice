<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Vehicle;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicle = new \App\Models\Vehicle([
            'vehicle_name' => '軽自動車',
            // 'capacities' => '{"people":4}'
            'capacities' => '{"people":4, "suitcase":2}'
        ]);
        $vehicle->save();

        $vehicle = new \App\Models\Vehicle([
            'vehicle_name' => 'セダン',
            // 'capacities' => '{"people":5}'
            'capacities' => '{"people":5, "suitcase":3}'
        ]);
        $vehicle->save();

    }
}
