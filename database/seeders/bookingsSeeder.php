<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\bookings;

class bookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        bookings::factory()->count(10)->create();
    }
}
