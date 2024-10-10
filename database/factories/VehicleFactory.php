<?php

namespace Database\Factories;

use App\Models\Shipment;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shipment_id' => Shipment::factory(), // Creates a linked shipment
            'input_date' => $this->faker->date(),
            'buyer1' => $this->faker->name(),
            'provider_name' => 'KARMEN',
            'origin_id' => 'karmen_' . $this->faker->randomNumber(),
            'make_title' => $this->faker->word(),
            'model_title' => $this->faker->word(),
            'grade' => $this->faker->word(),
            'chassis_model' => $this->faker->word(),
            'chassis_number' => $this->faker->numerify('######'),
            'veh_fuel' => $this->faker->randomElement(['Gasoline', 'Diesel', 'Electric']),
            'veh_trans' => $this->faker->randomElement(['ATM', 'MT']),
            'veh_traction' => $this->faker->randomElement(['2WD', '4WD']),
            'veh_km' => $this->faker->numberBetween(5000, 100000),
            'veh_cc' => $this->faker->numberBetween(1000, 5000),
            'veh_year' => $this->faker->year(),
            'veh_month' => $this->faker->numberBetween(1, 12),
            'veh_color' => $this->faker->safeColorName(),
            'gross_weight' => $this->faker->numberBetween(1500, 3000),
            'net_weight' => $this->faker->numberBetween(1000, 2000),
            'veh_length' => $this->faker->numberBetween(300, 500),
            'veh_height' => $this->faker->numberBetween(100, 200),
            'veh_width' => $this->faker->numberBetween(150, 200),
            'other_info' => $this->faker->sentence(),
            'engine_type' => $this->faker->word(),
            'engine_no' => $this->faker->numerify('#####'),
            'veh_doors' => $this->faker->randomDigitNotNull(),
            'purchase_price' => $this->faker->randomFloat(2, 1000, 50000),
            'veh_steering' => 'RHD',
            'veh_condition' => 'Used',
            'veh_status' => 'ONSEA',
            'branch_id' => $this->faker->randomDigitNotNull(),
            'provider' => 'KARMEN',
            'vessel' => $this->faker->word(),
            'invoice_number' => $this->faker->numerify('INV#####'),
            'veh_a_c' => $this->faker->boolean(),
            'veh_p_s' => $this->faker->boolean(),
            'veh_abs' => $this->faker->boolean(),
            'veh_p_w' => $this->faker->boolean(),
            'veh_srs' => $this->faker->boolean(),
            'veh_r_spoiler' => $this->faker->boolean(),
            'veh_cd' => $this->faker->boolean(),
            'veh_tv' => $this->faker->boolean(),
            'veh_navigation' => $this->faker->boolean(),
            'veh_a_w' => $this->faker->boolean(),
            'veh_leather_seats' => $this->faker->boolean(),
            'veh_b_t' => $this->faker->boolean(),
            'veh_radio' => $this->faker->boolean(),
            'veh_back_tyre' => $this->faker->boolean(),
            'power_mirror' => $this->faker->boolean(),
            'back_camera' => $this->faker->boolean(),
            'front_camera' => $this->faker->boolean(),
            'veh_central_locking' => $this->faker->boolean(),
            'veh_roof_rail' => $this->faker->boolean(),
        ];
    }
}
