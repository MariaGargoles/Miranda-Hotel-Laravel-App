<?php

namespace Database\Factories;

use App\Models\amenities;
use App\Models\rooms;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Amenity>
 */
class amenitiesFactory extends Factory
{
    protected $model = amenities::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word, 
            'room_id' => rooms::factory(),
        ];
    }
}
