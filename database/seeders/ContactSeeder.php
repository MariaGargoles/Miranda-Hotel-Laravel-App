<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::factory()->count(10)->create();  
    }
}
