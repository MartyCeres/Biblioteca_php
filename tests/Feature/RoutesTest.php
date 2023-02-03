<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_libri()
    {
        $response = $this->get('/libri');

        $response->assertStatus(200);
    }
    public function test_lettori()
    {
        $response = $this->get('/lettori');

        $response->assertStatus(200);
    }
    public function test_prestiti()
    {
        $response = $this->get('/prestiti');

        $response->assertStatus(200);
    }
    public function test_gestioneUtenti()
    {
        $response = $this->get('/gestioneUtenti');

        $response->assertStatus(200);
    }
    public function test_gestionePrestiti()
    {
        $response = $this->get('/gestionePrestiti');

        $response->assertStatus(200);
    }
    public function test_posizioneLibri()
    {
        $response = $this->get('/posizionilibri');

        $response->assertStatus(200);
    }
}
