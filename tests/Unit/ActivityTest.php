<?php

namespace Tests\Unit;

use Tests\TestCase;

class ActivityTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_an_user_can_buy_an_activity()
    {
        $attributes = [
        'people' => 5,
        'total' => 999,
        'date' => '2022-12-01',
        'activity_id' => 1, 
        ];
        $db = [
            'people' => 5,
            'price' => 999,
            'reservation_date' => '2022-12-01',
            'activity_date' => '2022-12-01',
            'activity_id' => 1, 
            
            ];
        $response = $this->json('post','/activities/buy', $attributes)
            ->assertStatus(302);
        
        $this->assertDatabaseHas('activity_bookings', $db);
    }

    public function test_an_user_cant_search_an_activity_with_invalid_date()
    {
        $this->get('/activities', ['date' => 'www', 'people' => 1])
            ->assertSessionHasErrors('date')
            ->assertStatus(302);

        $this->assertDatabaseMissing('activities', ['date' => 'www', 'lives' => 1]);
    }
}
