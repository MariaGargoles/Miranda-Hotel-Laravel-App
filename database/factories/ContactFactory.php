<?php

namespace Database\Factories;

use App\Models\contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;  

    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'client_name' => $this->faker->name(),
            'client_email' => $this->faker->email(),
            'client_phone' => $this->faker->phoneNumber(),
            'subject' => $this->faker->sentence(),
            'comment' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['public', 'archived']),
        ];
    }
}
