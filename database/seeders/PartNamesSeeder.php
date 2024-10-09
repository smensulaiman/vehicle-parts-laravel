<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PartNamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partNames = [
            ['name' => 'GLASS FRONT', 'quantity' => 1],
            ['name' => 'GLASS REAR', 'quantity' => 1],
            ['name' => 'LIGHT FRONT', 'quantity' => 2],
            ['name' => 'LIGHT TAIL', 'quantity' => 2],
            ['name' => 'BUMPER FRONT', 'quantity' => 1],
            ['name' => 'BUMPER REAR', 'quantity' => 1],
            ['name' => 'BONNET', 'quantity' => 1],
            ['name' => 'REAR GATE/TRUNK', 'quantity' => 1],
            ['name' => 'DOOR FRONT', 'quantity' => 2],
            ['name' => 'DOOR REAR', 'quantity' => 2],
            ['name' => 'RADIATOR', 'quantity' => 1],
            ['name' => 'ENGINE AND TRANSMISSION', 'quantity' => 1],
            ['name' => 'TYRE', 'quantity' => 4],
            ['name' => 'LOW ARM', 'quantity' => 2],
            ['name' => 'STEERING RACK', 'quantity' => 1],
            ['name' => 'DRIVE SHAFT', 'quantity' => 2],
            ['name' => 'STRUT FRONT', 'quantity' => 2],
            ['name' => 'STRUT REAR', 'quantity' => 2],
            ['name' => 'REAR AXLE', 'quantity' => 1],
            ['name' => 'WIPER SET', 'quantity' => 1],
            ['name' => 'WASHER TANK', 'quantity' => 1],
            ['name' => 'AIRCON PIPES', 'quantity' => 2],
            ['name' => 'FENDER', 'quantity' => 2],
            ['name' => 'FENDER LINER', 'quantity' => 2],
            ['name' => 'MUFFLER', 'quantity' => 1],
            ['name' => 'FUEL PUMP', 'quantity' => 1],
            ['name' => 'STEERING WHEEL', 'quantity' => 1],
            ['name' => 'STEERING COLUMN', 'quantity' => 1],
            ['name' => 'BLOWER MOTOR', 'quantity' => 1],
            ['name' => 'EVAPORATOR', 'quantity' => 1],
            ['name' => 'JACK AND TOOLS', 'quantity' => 1],
            ['name' => 'AIRCON SWITCH PANEL', 'quantity' => 1],
            ['name' => 'SPEEDOMETER', 'quantity' => 1],
            ['name' => 'SPEAKER', 'quantity' => 2],
            ['name' => 'AUDIO', 'quantity' => 1],
            ['name' => 'ABS ACTUATOR', 'quantity' => 1],
            ['name' => 'BRAKE MASTER', 'quantity' => 1],
            ['name' => 'SEATS', 'quantity' => 2],
        ];


        DB::table('part_names')->insert($partNames);
    }
}
