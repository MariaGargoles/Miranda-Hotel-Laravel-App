<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \DB::unprepared(file_get_contents('./seed.sql'));

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('rooms_amenities')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->call(RoomAmenitySeeder::class);
    }
}
