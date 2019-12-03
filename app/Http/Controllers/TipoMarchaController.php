<?php

namespace App\Http\Controllers;

use App\Models\Tipo_marcha;
use Illuminate\Http\Request;
use Session;
class TipoMarchaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Tipo marchas';
        $marchas = Tipo_marcha::orderBy('nombre')->paginate(5); // PAGINACION A 5 RESULTADOS

        return view('tipo_marchas.index', compact('title', 'marchas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_marchas.create');
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
        Tipo_marcha::create($request->all());

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Tipo marcha creada correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('tipo_marchas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_marcha  $tipo_marcha
     * @return \Illuminate\Http\Response
     * 
     */
    public function show(Tipo_marcha $tipo_marcha)
    {
        $title = 'Detalle de tipo marchas';
        
        if($tipo_marcha == null) {

            return view('errors.404', compact('title', 'tipo_marcha'));
        }
        
        return view('tipo_marchas.show', compact('title', 'tipo_marcha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo_marcha  $tipo_marcha
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_marcha $tipo_marcha)
    {
        return view('tipo_marchas.edit', compact('tipo_marcha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo_marcha  $tipo_marcha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_marcha $tipo_marcha)
    {
        //validamos lo que nos llega del formulario
        $request->validate(
            [
                'nombre' => 'required',
            ]
            );

        // Creo situada si ha validado bien los datos
        $tipo_marcha->update(
            [
                'nombre' => $request['nombre'],
            ]
        );

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Tipo marcha actualizada correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('tipo_marchas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_marcha  $tipo_marcha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_marcha $tipo_marcha)
    {
        $tipo_marcha->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Tipo marcha borrada correctamente');
        //redirigimos al listado
        return redirect()->route('tipo_marchas.index');
    }
}
