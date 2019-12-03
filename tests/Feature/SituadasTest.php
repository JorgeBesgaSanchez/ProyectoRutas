<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SituadasTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de Situadas.
     *
     * @test
     * 
     */
    public function cargaSituadasIndex()
    {
        $response = $this->get('/situadas');

        $response->assertStatus(200);

        $response->assertSee('Situadas');
    }

    public function cargaRutasShow($situada)
    {
        $response = $this->get(route('situadas.show', [$situada->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de Situada');
    }
}
