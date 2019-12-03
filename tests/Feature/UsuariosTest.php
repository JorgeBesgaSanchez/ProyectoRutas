<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsuariosTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de Usuarios.
     *
     * @test
     * 
     */
    public function cargaUsuariosIndex()
    {
        $response = $this->get('/usuarios');

        $response->assertStatus(200);

        $response->assertSee('Usuarios');
    }

    public function cargaUsuariosShow($usuario)
    {
        $response = $this->get(route('usuarios.show', [$usuario->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de Usuario');
    }
}
