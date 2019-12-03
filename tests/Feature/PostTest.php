<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test de carga de la pagina index de Post.
     *
     * @test
     * 
     */
    public function cargaPostIndex()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);

        $response->assertSee('Posts');
    }

    public function cargaPostShow($post)
    {
        $response = $this->get(route('posts.show', [$pasa->id]));

        $response->assertStatus(200);

        $response->assertSee('Detalle de Post');
    }
}
