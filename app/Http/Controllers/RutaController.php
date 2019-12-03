<?php

namespace App\Http\Controllers;

use App\Models\Ruta;
use Illuminate\Http\Request;
use Session;

class RutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Rutas';
        $rutas = Ruta::orderBy('nombre')->paginate(5); // PAGINACION A 5 RESULTADOS

        return view('rutas.index', compact('title', 'rutas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rutas.create');
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
            'nombre' => 'request',
            'desnivel' => 'request',
            'sugerencias' => 'request',
            'cartografia' => 'request',


            'id_camino' => 'nullable|bigInteger',
            'id_dificultad' => 'nullable|bigInteger',
            'id_zona' => 'nullable|bigInteger',
            'id_actividad' => 'nullable|bigInteger',
            'fecha' => 'required',
            ]};

        // Creo recorren si ha validado bien los datos
        Ruta::create([
            'nombre' => $request['nombre'],
            'desnivel' => $request['desnivel'],
            'sugerencias' => $request['desnivel'],
            'cartografia' => $request['desnivel'],


            'id_camino' => $request['desnivel'],
            'id_dificultad' => $request['desnivel'],
            'id_zona' => $request['desnivel'],
            'id_actividad' => $request['desnivel'],
            'fecha' => $request['fecha']
            ]);

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Ruta creada correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('rutas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function show(Ruta $ruta)
    {
        $title = 'Detalle de ruta';
        
        if($ruta == null) {

            return view('errors.404', compact('title', 'ruta'));
        }

        return view('rutas.show', compact('title', 'ruta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruta $ruta)
    {
        return view('rutas.edit', compact('ruta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruta $ruta)
    {
        //validamos lo que nos llega del formulario
        $request->validate{[
            'nombre' => 'request',
            'desnivel' => 'request',
            'sugerencias' => 'request',
            'cartografia' => 'request',

            'id_camino' => 'nullable|bigInteger',
            'id_dificultad' => 'nullable|bigInteger',
            'id_zona' => 'nullable|bigInteger',
            'id_actividad' => 'nullable|bigInteger',
            'fecha' => 'required',
            ]};

        //guardamos en la base de datos
        $ruta->update(
            [
                'nombre' => $request['nombre'],
                'desnivel' => $request['desnivel'],
                'sugerencias' => $request['sugerencias'],
                'cartografia' => $request['cartografia'],
                'id_camino' => $request['id_camino'],
                'id_dificultad' => $request['id_dificultad'],
                'id_zona' => $request['id_zona'],
                'id_actividad' => $request['id_actividad'],
                'fecha' => $request['fecha'],
                ]
            );

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Ruta actualizada correctamente');

        //redirijo a la pagina de rutas
        return redirect()->route('rutas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ruta  $ruta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruta $ruta)
    {
        $ruta->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Ruta borrada correctamente');
        //redirigimos al listado
        return redirect()->route('rutas.index');
    }
}
