<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ZonasTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de Zonas.
     *
     * @test
     * 
     */
    public function cargaZonasIndex()
    {
        $response = $this->get('/zonas');

        $response->assertStatus(200);

        $response->assertSee('Zonas');
    }

    public function cargaZonasShow($zona)
    {
        $response = $this->get(route('zonas.show', [$zona->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de zona');
    }
}
