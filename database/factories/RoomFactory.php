<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition(): array
    {
        return [
            'roomNumber' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->randomElement(['available', 'booked']),
            'roomType' => $this->faker->randomElement(['Single', 'Double', 'Suite']),
            'description' => $this->faker->text(),
            'offer' => $this->faker->boolean(),
            'price' => $this->faker->numberBetween(50, 500),
            'discount' => $this->faker->numberBetween(0, 50),
            'cancellation' => $this->faker->sentence(),
        ];
    }
}
