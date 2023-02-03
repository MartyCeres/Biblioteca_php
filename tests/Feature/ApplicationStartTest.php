<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApplicationStartTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_ViewHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
