<?php

namespace Database\Seeders;

use App\Models\Shipment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\VehicleParts;
use Database\Factories\ShipmentFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
//        $this->call([
//            UserSeeder::class,
//        ]);

        Shipment::factory()
            ->count(10)
            ->has(VehicleParts::factory()
            ->count(5), 'vehicleParts')
            ->create();
    }
}
