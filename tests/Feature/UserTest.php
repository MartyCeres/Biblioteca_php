<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_ReturnHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /*public function testHasName()
    {
        $user = factory(User::class)->make([
            'name' => 'Giulia'
        ]);

        $verdetto = $user->select('name','Giulia');
        $this->assertTrue($verdetto);
    }*/
    public function test_NonAggiungeUtente()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/aggiuntaUtenti', ['name' => 'guest']);

        $response->assertStatus(404);
        $response->assertNotFound(); // analogo
    }
}
