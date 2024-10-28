<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Activity;

class ActivityTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $activity;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create([
            'name' => 'Jorge',
            'email' => 'jorgemc1294@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        $this->activity = Activity::factory()->create([
            'user_id' => $this->user->id,
        ]);

        $this->actingAs($this->user);
    }

    public function test_activities_route_returns_successful_response(): void
    {
        $response = $this->get('/activities');

        $response->assertStatus(200);
    }

    public function test_activities_route_returns_array_of_activities(): void
    {
        $response = $this->getJson('/activities');

        $response->assertStatus(200)
                ->assertJsonStructure([
                    '*' => [ 
                        'id',
                        'type',
                        'user_id',
                        'dateTime',
                        'paid',
                        'notes',
                        'satisfaction',
                    ]
                ]);
    }

    public function test_activities_single_route_returns_successful_response(): void
    {
        $response = $this->get('/activities/' . $this->activity->id);

        $response->assertStatus(200);
    }

    public function test_delete_activity_successfully(): void
    {
        $this->assertDatabaseHas('activities', [
            'id' => $this->activity->id
        ]);
        $response = $this->delete('/activities/' . $this->activity->id);
        $response->assertStatus(200)->assertJson(['message' => 'Activity deleted successfully']);
    }

    public function test_update_activity_successfully(): void
    {
        $newData = [
            'type' => 'Kayak',
            'dateTime' => now()->addDay()->format('Y-m-d H:i:s'),
            'paid' => true,
            'notes' => 'Updated notes',
            'satisfaction' => 8,
        ];

        $response = $this->putJson('/activities/' . $this->activity->id, $newData);

        $response->assertStatus(200) ->assertJson(['message' => 'Activity updated successfully', 'activity' => $newData,]);
    }
}
