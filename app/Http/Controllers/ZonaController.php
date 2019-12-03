<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use Illuminate\Http\Request;
use Session;

class ZonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Zonas';
        $zonas = Zona::orderBy('nombre')->paginate(5); // PAGINACION A 5 RESULTADOS

        return view('zonas.index', compact('title', 'zonas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zonas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nombre' => 'required',
            ]
        );
        
        // Creo situada si ha validado bien los datos
        Zona::create(
            [
            'nombre' => $request['nombre'],
            ]
        );

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Zona creada correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('zonas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function show(Zona $zona)
    {
        $title = 'Detalle de zona';
        
        if($zona == null) {

            return view('errors.404', compact('title', 'zona'));
        }
        
        return view('zonas.show', compact('title', 'zona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function edit(Zona $zona)
    {
        return view('zonas.edit', compact('zona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zona $zona)
    {
        $request->validate(
            [
                'nombre' => 'required',
            ]
        );
        
        // Creo situada si ha validado bien los datos
        $zona->update(
            [
            'nombre' => $request['nombre'],
            ]
        );

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Zona actualizada correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('zonas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zona $zona)
    {
        $zona->delete();
        //muestro mensaje de confirmación
        Session::flash('message', 'Zona borrada correctamente');
        //redirigimos al listado
        return redirect()->route('zonas.index');
    }
}
