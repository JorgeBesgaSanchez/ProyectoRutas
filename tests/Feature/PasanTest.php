<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PasanTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de Pasan.
     *
     * @test
     * 
     */
    public function cargaPasanIndex()
    {
        $response = $this->get('/pasan');

        $response->assertStatus(200);

        $response->assertSee('Pasan');
    }

    public function cargaPasanShow($pasa)
    {
        $response = $this->get(route('pasan.show', [$pasa->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de Pasa por');
    }
}
