<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TipoCaminosTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de TipoCaminos.
     *
     * @test
     * 
     */
    public function cargaTipoCaminosIndex()
    {
        $response = $this->get('/tipo_caminos');

        $response->assertStatus(200);

        $response->assertSee('Tipo caminos');
    }

    public function cargaTipoCaminosShow($tipo_camino)
    {
        $response = $this->get(route('tipo_caminos.show', [$tipo_camino->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de tipo camino');
    }
}
