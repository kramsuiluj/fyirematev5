<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chief>
 */
class ChiefFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rank' => $this->faker->title,
            'firstname' => $this->faker->unique()->firstName,
            'middlename' => $this->faker->unique()->lastName,
            'lastname' => $this->faker->unique()->lastName,
        ];
    }
}
