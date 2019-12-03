<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TipoMarchasTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de TipoMarchas.
     *
     * @test
     * 
     */
    public function cargaTipoMarchasIndex()
    {
        $response = $this->get('/tipo_marchas');

        $response->assertStatus(200);

        $response->assertSee('Tipo marchas');
    }

    public function cargaTipoMarchasShow($tipo_marcha)
    {
        $response = $this->get(route('tipo_marchas.show', [$tipo_marcha->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de tipo marchas');
    }
}
