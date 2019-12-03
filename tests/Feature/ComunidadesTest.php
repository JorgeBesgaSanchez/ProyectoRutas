<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ComunidadesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de Comunidades.
     *
     * @test
     * 
     */
    public function cargaComunidadesIndex()
    {
        $response = $this->get('/comunidades');

        $response->assertStatus(200);

        $response->assertSee('Comunidades Autónomas');
    }

    /**
     * Undocumented function
     *
     * @param [type] $comunidad
     * @return void
     */
    public function cargaComunidadesShow($comunidad)
    {
        $response = $this->get(route('comunidades.show', [$comunidad->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de Comunidad');
    }
}
