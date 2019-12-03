<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;
use Session;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Provincias';
        $provincias = Provincia::orderBy('id_provincia')->paginate(5); // PAGINACION A 5 RESULTADOS

        return view('provincias.index', compact('title', 'provincias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provincias.create');
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
            'id_provincia' => 'required',
            'nombre' => 'required',
            'id_comunidad' => 'nullable|bigInteger',
            ]};

        // Creo la comunidad si ha validado bien los datos
        Provincia::create($request->all());

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Provincia creada correctamente');

        //redirijo a la pagina de dificultades
        return redirect()->route('provincias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function show(Provincia $provincia)
    {
        $title = 'Detalle de Provincia';
        
        if($provincia == null) {

            return view('errors.404', compact('title', 'provincia'));
        }
        
        return view('provincias.show', compact('title', 'provincia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function edit(Provincia $provincia)
    {
        return view('provincias.edit', compact('provincia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provincia $provincia)
    {
        //Validamos los datos que nos llegan
        $request->validate{[
            'id_provincia' => 'required',
            'nombre' => 'required',
            'id_comunidad' => 'nullable|bigInteger',
            ]};
        //guardamos en la base de datos
        $provincia->update(
            [
                'id_provincia' => $request['id_provincia'],
                'nombre' => $request['nombre'],
                'id_comunidad' => $request['id_comunidad'],
            ]
        );

        //mostramos mensaje de confirmación
        Session::flash('message', 'Provincia actualizada correctamente');

        //redirigimos al listado de comunidades
        return redirect()->route('provincias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provincia  $provincia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provincia $provincia)
    {
        $provincia->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Provincia borrada correctamente');
        //redirigimos al listado
        return redirect()->route('provincias.index');
    }
}
