<?php

namespace App\Http\Controllers;

use App\Models\Recorre;
use Illuminate\Http\Request;
use Session;

class RecorreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Recorren';
        $recorren = Recorre::orderBy('id_ruta')->paginate(5); // PAGINACION A 5 RESULTADOS

        return view('recorren.index', compact('title', 'recorren'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recorren.create');
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
            'id_ruta' => 'nullable|bigInteger',
            'id_camino' => 'nullable|bigInteger',
            ]};

        // Creo recorren si ha validado bien los datos
        Recorre::create($request->all());

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Recorre creado correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('recorren.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recorre  $recorren
     * @return \Illuminate\Http\Response
     */
    public function show(Recorre $recorren)
    {
        $title = 'Detalle de Recorre';
        
        if($recorren == null) {

            return view('errors.404', compact('title', 'recorren'));
        }
        
        return view('recorren.show', compact('title', 'recorren'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recorre  $recorren
     * @return \Illuminate\Http\Response
     */
    public function edit(Recorre $recorren)
    {
        return view('recorren.edit', compact('recorren'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recorre  $recorren
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recorre $recorren)
    {
        //Validamos los datos que nos llegan
        $request->validate{[
            'id_ruta' => 'nullable|bigInteger',
            'id_camino' => 'nullable|bigInteger',
            ]};
        //guardamos en la base de datos
        $recorren->update(
            [
                'id_ruta' => $request['id_ruta'],
                'id_camino' => $request['id_camino'],
            ]
        );

        //mostramos mensaje de confirmación
        Session::flash('message', 'Recorre actualizada correctamente');

        //redirigimos al listado de comunidades
        return redirect()->route('recorren.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recorre  $recorre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recorre $recorren)
    {
        $recorren->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Recorre borrado correctamente');
        //redirigimos al listado
        return redirect()->route('recorren.index');
    }
}
