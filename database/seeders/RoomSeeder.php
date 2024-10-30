<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run()
    {
        Room::create([
            'room_number' => 56,
            'status' => 'available',
            'roomType' => 'Suite',
            'description' => 'Aliquam doloremque vero consequuntur velit et dolorem ea a. Debitis dicta dolore doloremque aut. Sed aut quibusdam in ab.',
            'offer' => 0,
            'price' => 55,
            'discount' => 14,
            'cancellation' => 'Hic sit sit doloribus.',
        ]);
    }
}

