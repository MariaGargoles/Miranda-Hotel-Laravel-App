<?php

namespace Database\Factories;

use App\Models\bookings;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookings>
 */
class bookingsFactory extends Factory
{
    protected $model = bookings::class;

    public function definition(): array
    {
        return [
            'guest' => $this->faker->name(),
            'check_in' => $this->faker->dateTimeBetween('-1 week', '+1 week')->format('Y-m-d H:i:s'), 
            'check_out' => $this->faker->dateTimeBetween('+1 week', '+2 weeks')->format('Y-m-d H:i:s'), 
            'room_type' => $this->faker->randomElement(['Single', 'Double', 'Suite']), 
            'special_request' => $this->faker->sentence(), 
            'status' => $this->faker->randomElement(['In progress', 'Check In', 'Check Out']), 
            'order_date' => $this->faker->date('Y-m-d'), 
        ];
    }
}
