<?php

namespace App\Http\Controllers;

use App\Models\Comunidad;
use Illuminate\Http\Request;
use Session;

class ComunidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Comunidades Autónomas';
        $comunidades = Comunidad::orderBy('nombre')->paginate(5); // PAGINACION A 5 RESULTADOS

        return view('comunidades.index', compact('title', 'comunidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('comunidades.create');
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
        $request->validate{
            ['nombre' => 'required']
        };

        // Creo la comunidad si ha validado bien los datos
        Comunidad::create([
            'nombre' => $request['nombre'],
        ]);

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Comunidad creada correctamente');

        //redirijo a la pagina de comunidades
        return redirect()->route('comunidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comunidad  $comunidade
     * @return \Illuminate\Http\Response
     */
    public function show(Comunidad $comunidade)
    {
        $title = 'Detalle de Comunidad';
        
        if($comunidade == null) {

            return view('errors.404', compact('title', 'comunidade'));
        }

        return view('comunidades.show', compact('title', 'comunidade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comunidad  $comunidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Comunidad $comunidade)
    {
        return view('comunidades.edit', compact('comunidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comunidad  $comunidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comunidad $comunidade)
    {
        //Validamos los datos que nos llegan
        $request->validate{[
            'nombre' => 'required'
        ]};

        //guardamos en la base de datos
        $comunidade->update(
            [
                'nombre' => $request['nombre'],
            ]
        );

        //mostramos mensaje de confirmación
        Session::flash('message', 'Comunidad autónoma actualizada correctamente');

        //redirigimos al listado de comunidades
        return redirect()->route('comunidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comunidad  $comunidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comunidad $comunidade)
    {
        $comunidade->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Comunidad borrada correctamente');
        //redirigimos al listado
        return redirect()->route('comunidades.index');
    }
}
