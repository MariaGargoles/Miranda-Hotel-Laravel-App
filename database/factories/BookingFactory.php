<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $checkInDate = $this->faker->dateTimeBetween('now');
        $checkOutDate = $this->faker->dateTimeBetween($checkInDate, '+1 week');

        return [
            'fullName' => $this->faker->name,
            'bookDate' =>  now(),
            'checkIn' => $checkInDate,
            'checkOut' => $checkOutDate,
            'specialRequest' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['In progress', 'Check In', 'Check Out']),
            'room_id' => Room::inRandomOrder()->first()->id,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
        ];
    }
}
