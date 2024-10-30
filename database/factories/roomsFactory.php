<?php

namespace Database\Factories;

use App\Models\rooms;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class roomsFactory extends Factory
{
    protected $model = rooms::class;

    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(),  
            'room_number' => $this->faker->unique()->numerify('Room ###'),  
            'room_type' => $this->faker->randomElement(['single', 'double', 'suite']),  
            'price' => $this->faker->numberBetween(100, 500),  
            'offer_price' => $this->faker->numberBetween(80, 400),  
            'status' => $this->faker->randomElement(['available', 'booked']),  
            'availability' => $this->faker->randomElement(['available', 'unavailable']),  
        ];
    }
}
