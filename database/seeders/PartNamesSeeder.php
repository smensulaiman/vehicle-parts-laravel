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
            ['name' => 'NOSE CUT'],
            ['name' => 'ABS BRAKE'],
            ['name' => 'ACCELERATOR PEDAL'],
            ['name' => 'AIR CONDITIONER BLOWER'],
            ['name' => 'BONNET'],
            ['name' => 'BACK DOOR'],
            ['name' => 'AIR FILTER'],
            ['name' => 'BRAKE VACUM'],
            ['name' => 'PACKAGE ELECTRICAL CABLE'],
            ['name' => 'CAR JACK'],
            ['name' => 'CAR MUFFLER'],
            ['name' => 'CATALYZER'],
            ['name' => 'CEILING'],
            ['name' => 'CENTER CONSOLE'],
            ['name' => 'DASHBOARD'],
            ['name' => 'DOOR MALL'],
            ['name' => 'DOOR VISOR'],
            ['name' => 'ENGINE MOUNT'],
            ['name' => 'FENDER'],
            ['name' => 'FENDER INNER'],
            ['name' => 'FLOOR MAT'],
            ['name' => 'FRONT AXLE'],
            ['name' => 'FRONT BUMPER'],
            ['name' => 'FRONT DOOR'],
            ['name' => 'FRONT LIGHT'],
            ['name' => 'FRONT SEAT'],
            ['name' => 'FUEL PUMP'],
            ['name' => 'GAS BRAKE PIPELINE'],
            ['name' => 'GEAR SHIFT'],
            ['name' => 'INNER PILLAR COVER'],
            ['name' => 'RADIATOR'],
            ['name' => 'REAR AXLE'],
            ['name' => 'REAR BUMPER'],
            ['name' => 'REAR DOOR'],
            ['name' => 'REAR LIGHT'],
            ['name' => 'SHOCK ABSORBER'],
            ['name' => 'SIDE BRAKE'],
            ['name' => 'STEERING RACK'],
            ['name' => 'STEERING WHEEL'],
            ['name' => 'SUSPENSION'],
            ['name' => 'SPRING'],
            ['name' => 'WINDOW WASHER TANK'],
            ['name' => 'WIPER DRIVER'],
            ['name' => 'BRAKE PEDAL'],
            ['name' => 'BACK WINDOW'],
            ['name' => 'FRONT WINDOW'],
            ['name' => 'HALF CUT'],
            ['name' => 'COMPUTER ENGINE'],
            ['name' => 'SPEED METER'],
            ['name' => 'SIDE WINDOW'],
            ['name' => 'SPARE TYRE'],
            ['name' => 'TIRE'],
            ['name' => 'ENGINE'],
            ['name' => 'BACK SEAT'],
            ['name' => 'REAR AC INT.'],
            ['name' => 'SUNROOF'],
            ['name' => 'RADIO'],
            ['name' => 'STABILIZER BAR'],
            ['name' => 'CARDAN SHAFT'],
            ['name' => 'TORSION BARS'],
        ];

        DB::table('part_names')->insert($partNames);
    }
}
