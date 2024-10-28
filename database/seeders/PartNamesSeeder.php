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
        //1. Engine and transmission
        //2. Nose cut
        //3. Muffler (2 pcs)
        //4. Rear suspension
        //5. Rear shock (2 pcs)
        //6. Wiper motor
        //7. Jack
        //8. Rear gate
        //9. Rear sliding doors ( 2 pcs)
        //10. Front doors ( 2 pcs)
        //11. Air cleaner box
        //12. Fuse box ( 2 pcs)
        //13. Engine mounts ( 3 pcs)
        //14. Member
        //15. Steering rack
        //16. Front strut ( 2 pcs)
        //17. Drive shaft (2 pcs)
        //18. Stabilizer
        //19. Lower arm ( 2 pcs)
        //20. Brake master
        //21. ABS actuator
        //22. Meter
        //23. Aircon switch panel
        //24. Fenders ( 2 pcs)
        //25. Fender liners ( 2 pcs)
        //26. Rear bumper
        //27. Bonnet
        //28. Side sill cover ( 2 pcs)
        //29. Evaporator
        //30. Fuel pump
        //31. Tyres ( 8 pcs)
        //32. Spare tyre (1pc)
        //33. Tail light ( 2 pcs)
        //34. Windscreen
        //35. Quarter glasses ( 2 pcs)
        //36. Steering wheel with column
        //37. Engine under cover
        //38. Power steering oil tank
        //39. Audio with speakers

        $partNames = [
            ['name' => 'ABS ACTUATOR', 'quantity' => 1],
            ['name' => 'AIRCON PIPES', 'quantity' => 2],
            ['name' => 'AIRCON SWITCH PANEL', 'quantity' => 1],
            ['name' => 'AUDIO', 'quantity' => 1],
            ['name' => 'BLOWER MOTOR', 'quantity' => 1],
            ['name' => 'BONNET', 'quantity' => 1],
            ['name' => 'BRAKE MASTER', 'quantity' => 1],
            ['name' => 'BUMPER FRONT', 'quantity' => 1],
            ['name' => 'BUMPER REAR', 'quantity' => 1],
            ['name' => 'DOOR FRONT', 'quantity' => 2],
            ['name' => 'DOOR REAR', 'quantity' => 2],
            ['name' => 'DRIVE SHAFT', 'quantity' => 2],
            ['name' => 'ENGINE AND TRANSMISSION', 'quantity' => 1],
            ['name' => 'EVAPORATOR', 'quantity' => 1],
            ['name' => 'FENDER', 'quantity' => 2],
            ['name' => 'FENDER LINER', 'quantity' => 2],
            ['name' => 'FUEL PUMP', 'quantity' => 1],
            ['name' => 'GLASS FRONT', 'quantity' => 1],
            ['name' => 'GLASS REAR', 'quantity' => 1],
            ['name' => 'JACK AND TOOLS', 'quantity' => 1],
            ['name' => 'LIGHT FRONT', 'quantity' => 2],
            ['name' => 'LIGHT TAIL', 'quantity' => 2],
            ['name' => 'LOW ARM', 'quantity' => 2],
            ['name' => 'MUFFLER', 'quantity' => 1],
            ['name' => 'RADIATOR', 'quantity' => 1],
            ['name' => 'REAR AXLE', 'quantity' => 1],
            ['name' => 'REAR GATE/TRUNK', 'quantity' => 1],
            ['name' => 'SEATS', 'quantity' => 2],
            ['name' => 'SPEEDOMETER', 'quantity' => 1],
            ['name' => 'SPEAKER', 'quantity' => 2],
            ['name' => 'STEERING COLUMN', 'quantity' => 1],
            ['name' => 'STEERING RACK', 'quantity' => 1],
            ['name' => 'STEERING WHEEL', 'quantity' => 1],
            ['name' => 'STRUT FRONT', 'quantity' => 2],
            ['name' => 'STRUT REAR', 'quantity' => 2],
            ['name' => 'TYRE', 'quantity' => 4],
            ['name' => 'WASHER TANK', 'quantity' => 1],
            ['name' => 'WIPER SET', 'quantity' => 1],
        ];

        DB::table('part_names')->insert($partNames);
    }
}
