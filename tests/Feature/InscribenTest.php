<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InscribenTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de Inscriben.
     *
     * @test
     * 
     */
    public function cargaInscribenIndex()
    {
        $response = $this->get('/inscriben');

        $response->assertStatus(200);

        $response->assertSee('Inscriben');
    }

    public function cargaInscribenShow($incribe)
    {
        $response = $this->get(route('inscriben.show', [$incribe->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de inscriben');
    }
}
