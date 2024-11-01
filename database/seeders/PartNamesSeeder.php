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
            ['name' => 'ABS ACTUATOR', 'quantity' => 1, 'price' => 250, 'is_generic' => false],
            ['name' => 'AIRCON PIPES', 'quantity' => 2, 'price' => 20, 'is_generic' => false],
            ['name' => 'AIRCON SWITCH PANEL', 'quantity' => 1, 'price' => 0, 'is_generic' => false],
            ['name' => 'AUDIO', 'quantity' => 1, 'price' => 180, 'is_generic' => false],
            ['name' => 'BLOWER MOTOR', 'quantity' => 1, 'price' => 220, 'is_generic' => false],
            ['name' => 'BONNET', 'quantity' => 1, 'price' => 350, 'is_generic' => false],
            ['name' => 'BRAKE MASTER', 'quantity' => 1, 'price' => 300, 'is_generic' => false],
            ['name' => 'BUMPER FRONT', 'quantity' => 1, 'price' => 450, 'is_generic' => false],
            ['name' => 'BUMPER REAR', 'quantity' => 1, 'price' => 380, 'is_generic' => false],
            ['name' => 'DOOR FRONT', 'quantity' => 2, 'price' => 500, 'is_generic' => false],
            ['name' => 'DOOR REAR', 'quantity' => 2, 'price' => 450, 'is_generic' => false],
            ['name' => 'DRIVE SHAFT', 'quantity' => 2, 'price' => 380, 'is_generic' => false],
            ['name' => 'ENGINE', 'quantity' => 1, 'price' => 2000, 'is_generic' => false],
            ['name' => 'EVAPORATOR', 'quantity' => 1, 'price' => 400, 'is_generic' => false],
            ['name' => 'FENDER', 'quantity' => 2, 'price' => 280, 'is_generic' => false],
            ['name' => 'FENDER LINER', 'quantity' => 2, 'price' => 100, 'is_generic' => false],
            ['name' => 'FUEL PUMP', 'quantity' => 1, 'price' => 280, 'is_generic' => false],
            ['name' => 'GLASS FRONT', 'quantity' => 1, 'price' => 550, 'is_generic' => false],
            ['name' => 'GLASS REAR', 'quantity' => 1, 'price' => 500, 'is_generic' => false],
            ['name' => 'JACK AND TOOLS', 'quantity' => 1, 'price' => 50, 'is_generic' => false],
            ['name' => 'LIGHT FRONT', 'quantity' => 2, 'price' => 400, 'is_generic' => false],
            ['name' => 'LIGHT TAIL', 'quantity' => 2, 'price' => 250, 'is_generic' => false],
            ['name' => 'LOW ARM', 'quantity' => 2, 'price' => 200, 'is_generic' => false],
            ['name' => 'MUFFLER', 'quantity' => 1, 'price' => 100, 'is_generic' => false],
            ['name' => 'RADIATOR', 'quantity' => 1, 'price' => 550, 'is_generic' => false],
            ['name' => 'REAR AXLE', 'quantity' => 1, 'price' => 0, 'is_generic' => false],
            ['name' => 'REAR GATE/TRUNK', 'quantity' => 1, 'price' => 650, 'is_generic' => false],
            ['name' => 'SEATS', 'quantity' => 2, 'price' => 0, 'is_generic' => false],
            ['name' => 'SPEEDOMETER', 'quantity' => 1, 'price' => 0, 'is_generic' => false],
            ['name' => 'SPEAKER', 'quantity' => 2, 'price' => 50, 'is_generic' => false],
            ['name' => 'STEERING COLUMN', 'quantity' => 1, 'price' => 0, 'is_generic' => false],
            ['name' => 'STEERING RACK', 'quantity' => 1, 'price' => 500, 'is_generic' => false],
            ['name' => 'STEERING WHEEL', 'quantity' => 1, 'price' => 80, 'is_generic' => false],
            ['name' => 'STRUT FRONT', 'quantity' => 2, 'price' => 0, 'is_generic' => false],
            ['name' => 'STRUT REAR', 'quantity' => 2, 'price' => 0, 'is_generic' => false],
            ['name' => 'TRANSMISSION', 'quantity' => 2, 'price' => 900, 'is_generic' => false],
            ['name' => 'TYRE', 'quantity' => 4, 'price' => 70, 'is_generic' => true],
            ['name' => 'WASHER TANK', 'quantity' => 1, 'price' => 30, 'is_generic' => false],
            ['name' => 'WIPER SET', 'quantity' => 1, 'price' => 50, 'is_generic' => false],
        ];

        DB::table('part_names')->insert($partNames);
    }
}
