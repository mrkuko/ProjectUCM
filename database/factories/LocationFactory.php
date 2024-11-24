<?php

namespace Database\Factories;

use App\Models\Branch;
use App\Models\Customer;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Location>
 */
class LocationFactory extends Factory
{
    protected $model = Location::class;

    public function definition(): array
    {
        return [
            // Randomly assign a customer
            'customer_id' => $this->faker->boolean(50) ? Customer::factory() : null,
            // Randomly assign a branch (75% chance)
            'branch_id' => $this->faker->boolean(75) ? Branch::factory() : null,
        ];
    }
}
