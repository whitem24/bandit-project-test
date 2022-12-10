<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ActivityTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_activities_screen_can_be_rendered()
    {
        $response = $this->get('/');
 
        $response->assertStatus(200);
    }

    public function test_activities_can_be_searched()
    {
        $response = $this->get('/activities', [
            'date' => '2022-12-15',
            'people' => 5,
        ]);
 
        $response->assertStatus(200);
    }
}
