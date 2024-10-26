<?php

namespace Database\Seeders; // Asegúrate de que este namespace esté correcto

use Illuminate\Database\Seeder;
use App\Models\Booking;
use Faker\Factory as Faker;

class BookingSeeder extends Seeder
{
    public function run()
    {
     {
        $faker = Faker::create();

        Booking::factory()->create([
            'fullName' => $faker->name,
            'bookDate' => now(),
            'checkIn' => now(),
            'checkOut' => now()->addDays(rand(1, 14)),
            'specialRequest' => $faker->sentence,
            'status' => 'In progress',
            'room_id' => 1,
            'phone' => $faker->phoneNumber,
            'email' => $faker->email,
            'user_id' => 1,
            'start_date' => now()->format('Y-m-d'),
            'end_date' => now()->addDays(rand(1, 14))->format('Y-m-d'),
            'total_price' => $faker->randomFloat(2, 50, 300),
        ]);
    }
}
}


