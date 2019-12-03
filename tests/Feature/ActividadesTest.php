<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ActividadesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de Actividades.
     *
     * @test
     * 
     */
    public function cargaActividadesIndex()
    {
        $response = $this->get('/actividades');

        $response->assertStatus(200);

        $response->assertSee('Actividades');
    }

    /**
     * Undocumented function
     *
     * @param [type] $actividad
     * @return void
     */
    public function cargaActividadesShow($actividad)
    {
        $response = $this->get(route('actividades.show', [$actividad->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de Actividad');
    }

    public function cargaActividadesError($actividade)
    {
        $response = $this->get(route('errors.404', [$actividade->id]));

        $response->assertStatus(200);

        $response->assertSee('Página no encontrada');
    }

}
