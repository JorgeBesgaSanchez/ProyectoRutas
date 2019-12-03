<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DificultadesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de Comunidades.
     *
     * @test
     * 
     */
    public function cargaDificultadesIndex()
    {
        $response = $this->get('/dificultades');

        $response->assertStatus(200);

        $response->assertSee('Dificultades');
    }

    public function cargaDificultadesShow($dificultad)
    {
        $response = $this->get(route('dificultades.show', [$dificultad->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de dificultad');
    }
}
