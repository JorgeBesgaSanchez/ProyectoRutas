<?php

namespace App\Http\Controllers;

use App\Models\Situada;
use Illuminate\Http\Request;
use Session;

class SituadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Situadas';
        $situadas = Situada::orderBy('id_provincia')->paginate(5); // PAGINACION A 5 RESULTADOS

        return view('situadas.index', compact('title', 'situadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('situadas.create');
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
        $request->validate(
            [
                'id_provincia' => 'nullable',
                'id_zona' => 'nullable',
            ]
            );

        // Creo situada si ha validado bien los datos
        Situada::create($request->all());

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Situada creada correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('situadas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Situada  $situada
     * @return \Illuminate\Http\Response
     */
    public function show(Situada $situada)
    {
        $title = 'Detalle de Situada';
        
        if($situada == null) {

            return view('errors.404', compact('title', 'situada'));
        }
        
        return view('situadas.show', compact('title', 'situada'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Situada  $situada
     * @return \Illuminate\Http\Response
     */
    public function edit(Situada $situada)
    {
        return view('situadas.edit', compact('situada'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Situada  $situada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Situada $situada)
    {
        //validamos lo que nos llega del formulario
        $request->validate(
            [
                'id_provincia' => 'nullable',
                'id_zona' => 'nullable',
            ]
            );

        // Creo situada si ha validado bien los datos
        $situada->update(
            [
                'id_provincia' => $request['id_provincia'],
                'id_zona' => $request['id_zona'],
            ]
        );

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Situada actualizada correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('situadas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Situada  $situada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Situada $situada)
    {
        $situada->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Situada borrada correctamente');
        //redirigimos al listado
        return redirect()->route('situadas.index');
    }
}
