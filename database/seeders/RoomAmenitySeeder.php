<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomAmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($roomId = 1; $roomId <= 50; $roomId++) {
            $amenities = array_rand(array_flip(range(1, 7)), rand(3, 7));

            foreach ($amenities as $amenityId) {
                DB::table('rooms_amenities')->insert([
                    'roomId' => $roomId,
                    'amenityId' => $amenityId,
                ]);
            }
        }
    }
}
