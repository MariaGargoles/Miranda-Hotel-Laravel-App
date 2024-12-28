<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Photo;
use App\Models\Room;

class RoomPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = Room::all();

        $photos = Photo::all();
        foreach ($rooms as $room) {
            $room->photos()->attach(
                $photos->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
