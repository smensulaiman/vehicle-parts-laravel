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
            ['name' => 'ABS ACTUATOR', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'AIRCON PIPES', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'AIRCON SWITCH PANEL', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'AUDIO', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'BLOWER MOTOR', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'BONNET', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'BRAKE MASTER', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'BUMPER FRONT', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'BUMPER REAR', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'DOOR FRONT', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'DOOR REAR', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'DRIVE SHAFT', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'ENGINE AND TRANSMISSION', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'EVAPORATOR', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'FENDER', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'FENDER LINER', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'FUEL PUMP', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'GLASS FRONT', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'GLASS REAR', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'JACK AND TOOLS', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'LIGHT FRONT', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'LIGHT TAIL', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'LOW ARM', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'MUFFLER', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'RADIATOR', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'REAR AXLE', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'REAR GATE/TRUNK', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'SEATS', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'SPEEDOMETER', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'SPEAKER', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'STEERING COLUMN', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'STEERING RACK', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'STEERING WHEEL', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'STRUT FRONT', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'STRUT REAR', 'quantity' => 2, 'is_generic' => false],
            ['name' => 'TYRE', 'quantity' => 4, 'is_generic' => true],
            ['name' => 'WASHER TANK', 'quantity' => 1, 'is_generic' => false],
            ['name' => 'WIPER SET', 'quantity' => 1, 'is_generic' => false],
        ];

        DB::table('part_names')->insert($partNames);
    }
}
