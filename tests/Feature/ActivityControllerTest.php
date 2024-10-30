<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ActivityModelTest extends TestCase
{

    use RefreshDatabase;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        $user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        \App\Models\Activity::factory()->create([
            'user_id' => $user->id,
        ]);
    }

    public function test_activities_route_returns_successful_response(): void
    {
        $response = $this->get('/activities');

        $response->assertStatus(200);
    }

    public function test_activities_route_returns_array_of_activities(): void
    {
        $response = $this->getJson('/activities');

        $response->assertJson([
            'activities' => [] 
        ]);
    }

    public function test_activities_single_route_returns_successfull_response(): void
    {
        $response = $this->get('/activities/1');

        $response->assertStatus(404);
    }
}