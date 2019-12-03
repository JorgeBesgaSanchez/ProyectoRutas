<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ToponimosTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de Toponimos.
     *
     * @test
     * 
     */
    public function cargaToponimosIndex()
    {
        $response = $this->get('/toponimos');

        $response->assertStatus(200);

        $response->assertSee('Toponimos');
    }

    public function cargaToponimosShow($toponimo)
    {
        $response = $this->get(route('toponimos.show', [$toponimo->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de toponimos');
    }
}
