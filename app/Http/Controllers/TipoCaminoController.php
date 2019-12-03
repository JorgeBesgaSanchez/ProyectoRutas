<?php

namespace App\Http\Controllers;

use App\Models\Tipo_camino;
use Illuminate\Http\Request;
use Session;
class TipoCaminoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Tipo caminos';
        $caminos = Tipo_camino::orderBy('nombre')->paginate(5); // PAGINACION A 5 RESULTADOS

        return view('tipo_caminos.index', compact('title', 'caminos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_caminos.create');
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
                'nombre' => 'required',
            ]
            );

        // Creo situada si ha validado bien los datos
        Tipo_camino::create($request->all());

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Tipo camino creado correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('tipo_caminos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_camino  $tipo_camino
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_camino $tipo_camino)
    {
        $title = 'Detalle de tipo camino';
        
        if($tipo_camino == null) {

            return view('errors.404', compact('title', 'tipo_camino'));
        }
        
        return view('tipo_caminos.show', compact('title', 'tipo_camino'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo_camino  $tipo_camino
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_camino $tipo_camino)
    {
        return view('tipo_caminos.edit', compact('tipo_camino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo_camino  $tipo_camino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_camino $tipo_camino)
    {
        //validamos lo que nos llega del formulario
        $request->validate(
            [
                'nombre' => 'required',
            ]
        );

        // Creo situada si ha validado bien los datos
        $tipo_camino->update(
            [
                'nombre' => $request['nombre'],
            ]
        );

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Tipo caminos actualizado correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('tipo_caminos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_camino  $tipo_camino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_camino $tipo_camino)
    {
        $tipo_camino->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Tipo camino borrado correctamente');
        //redirigimos al listado
        return redirect()->route('tipo_caminos.index');
    }
}
