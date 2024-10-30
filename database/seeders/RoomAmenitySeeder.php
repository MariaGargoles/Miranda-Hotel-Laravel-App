<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\Amenity;

class RoomAmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = Room::all();
        $amenities = Amenity::all();

        foreach ($rooms as $room) {
            $room->amenities()->attach(
                $amenities->random(rand(1, 5))->pluck('id')->toArray()
            );
        }
    }
}
