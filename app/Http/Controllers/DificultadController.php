<?php

namespace App\Http\Controllers;

use App\Models\Dificultad;
use Illuminate\Http\Request;
use Session;

class DificultadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Dificultades';
        $dificultades = Dificultad::orderBy('nombre')->paginate(5); // PAGINACION A 5 RESULTADOS

        return view('dificultades.index', compact('title', 'dificultades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dificultades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        //validamos lo que nos llega del formulario
        $request->validate{['nombre' => 'required']};

        // Creo la comunidad si ha validado bien los datos
        Dificultad::create([
            'nombre' => $request['nombre'],
        ]);

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Dificultad creada correctamente');

        //redirijo a la pagina de dificultades
        return redirect()->route('dificultades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dificultad  $dificultad
     * @return \Illuminate\Http\Response
     */
    public function show(Dificultad $dificultade)
    {
        $title = 'Detalle de dificultad';
        
        if($dificultade == null) {

            return view('errors.404', compact('title', 'dificultade'));
        }

        return view('dificultades.show', compact('title', 'dificultade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dificultad  $dificultad
     * @return \Illuminate\Http\Response
     */
    public function edit(Dificultad $dificultade)
    {
        return view('dificultades.edit', compact('dificultade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dificultad  $dificultade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dificultad $dificultade)
    {
        //Validamos los datos que nos llegan
        $request->validate{[
            'nombre' => 'required'
        ]};

        //guardamos en la base de datos
        $dificultade->update(
            [
                'nombre' => $request['nombre'],
            ]
        );

        //mostramos mensaje de confirmación
        Session::flash('message', 'Dificultad actualizada correctamente');

        //redirigimos al listado de comunidades
        return redirect()->route('dificultades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Moddels\Dificultad  $dificultade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dificultad $dificultade)
    {
        $dificultade->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Dificultad borrada correctamente');
        //redirigimos al listado
        return redirect()->route('dificultades.index');
    }
}
