<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\rooms;

class roomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        rooms::factory()->count(10)->create();
    }
}
