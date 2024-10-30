<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['Surf', 'Windsurf', 'Kayak', 'ATV', 'Hot air baloon']),
            'user_id' => User::factory(),
            'dateTime' => $this->faker->dateTime,
            'paid' => $this->faker->boolean,
            'notes' => $this->faker->sentence,
            'satisfaction' => $this->faker->numberBetween(0, 10),
        ];
    }
}
