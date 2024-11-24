<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

define('BRANCHES', [
    'Main Branch',
    'Central Office',
    'Downtown Location',
    'East Side',
    'West Side',
    'North Branch',
    'South Branch'
]);
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(BRANCHES),
            'budget' => $this->faker->randomFloat(2, 1000, 15000),
        ];
    }
}
