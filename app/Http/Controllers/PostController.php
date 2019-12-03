<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Posts';
        $posts = Post::orderBy('id_usuario')->paginate(5); // PAGINACION A 5 RESULTADOS
        return view('posts.index', compact('title', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validamos lo que nos llega del formulario
        $request->validate{[
            'texto' => 'required',
            'is_usuario' => 'nullable|bigInteger',
            'id_ruta' => 'nullable|bigInteger',
            'fecha_y_hora' => 'required',
            ]};

        // Creo la comunidad si ha validado bien los datos
        Post::create($request->all());

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Post creado correctamente');

        //redirijo a la pagina de dificultades
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $title = 'Detalle de Post';
        
        if($post == null) {

            return view('errors.404', compact('title', 'post'));
        }
        
        return view('posts.show', compact('title', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //Validamos los datos que nos llegan
        $request->validate{[
            'texto' => 'required',
            'is_usuario' => 'nullable|bigInteger',
            'id_ruta' => 'nullable|bigInteger',
            'fecha_y_hora' => 'required',
        ]};
        //guardamos en la base de datos
        $post->update(
            [
                'texto' => $request['texto'],
                'is_usuario' => $request['is_usuario'],
                'id_ruta' => $request['id_ruta'],
                'fecha_y_hora' => $request['fecha_y_hora'],
            ]
        );
        //mostramos mensaje de confirmación
        Session::flash('message', 'Post actualizada correctamente');
        
        //redirigimos al listado de comunidades
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Post borrado correctamente');
        //redirigimos al listado
        return redirect()->route('posts.index');
    }
}
