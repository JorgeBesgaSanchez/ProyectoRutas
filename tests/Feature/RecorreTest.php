<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RecorreTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de Recorre.
     *
     * @test
     * 
     */
    public function cargaRecorreIndex()
    {
        $response = $this->get('/recorren');

        $response->assertStatus(200);

        $response->assertSee('Recorren');
    }

    public function cargaRecorreShow($recorre)
    {
        $response = $this->get(route('recorren.show', [$recorre->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de Recorre');
    }
}
