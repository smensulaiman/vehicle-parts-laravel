<?php

namespace Database\Factories;

use App\Models\Shipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Shipment>
 */
class ShipmentFactory extends Factory
{
    protected $model = Shipment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'departure' => $this->faker->date(),
            'provider' => $this->faker->company(),
            'destination_port' => $this->faker->city(),
            'vessel' => $this->faker->sentence(3),
            'term' => $this->faker->word(),
            'shipping_port' => $this->faker->city(),
            'invoice_customer' => $this->faker->name(),
            'branch_id' => $this->faker->randomDigitNotNull(),
            'received' => $this->faker->boolean(),
        ];
    }
}
