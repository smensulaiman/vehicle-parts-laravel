<?php

namespace Database\Seeders;

use App\Models\Part;
use App\Models\PartName;
use App\Models\Shipment;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

//        $this->call([
//            UserSeeder::class,
//            PartNamesSeeder::class
//        ]);

        Shipment::factory()
            ->count(50)
            ->has(Vehicle::factory()
                ->count(10)
                ->afterCreating(function (Vehicle $vehicle) {
                    $partsName = PartName::all();
                    foreach ($partsName as $partName) {
                        Part::factory()
                            ->create([
                                'vehicle_id' => $vehicle->id,
                                'part_name_id' => $partName->id,
                                'quantity' => $partName->quantity
                            ]);
                    }
                })
            )->create();
    }
}
