<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            $roomType = rand(1, 4);

            switch ($roomType) {
                case 1:
                    $rate = rand(125, 200);
                    break;
                case 2:
                    $rate = rand(180, 250);
                    break;
                case 3:
                    $rate = rand(220, 300);
                    break;
                case 4:
                    $rate = rand(300, 500);
                    break;
            }

            $offer = rand(0, 1) ? 'Yes' : 'No';
            $discount = $offer === 'Yes' ? rand(5, 50) : 0;

            DB::table('rooms')->insert([
                'name' => chr(rand(65, 68)) . '-' . rand(100, 999),
                'roomType' => $roomType,
                'rate' => rand(125, 500),
                'offer' => $offer,
                'discount' => $discount,
                'description' => $faker->sentence(15),
                'status' => rand(0, 1) ? 'Booked' : 'Available',
                'cancellationPolicies' => $faker->sentence(8),
            ]);
        }
    }
}
