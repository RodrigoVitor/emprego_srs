<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opportunity>
 */
class OpportunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'total' => fake()->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'salary' => fake()->randomElement(['1412,00', '1800,00', '2000,00']),
            'description' => fake()->paragraph(),
            'id_user' => User::pluck('id')->random()
        ];
    }
}
