<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RutasTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de Rutas.
     *
     * @test
     * 
     */
    public function cargaRutasIndex()
    {
        $response = $this->get('/rutas');

        $response->assertStatus(200);

        $response->assertSee('Rutas');
    }

    public function cargaRutasShow($ruta)
    {
        $response = $this->get(route('rutas.show', [$ruta->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de ruta');
    }
}
