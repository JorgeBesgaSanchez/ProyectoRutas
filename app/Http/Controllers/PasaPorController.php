<?php

namespace App\Http\Controllers;

use App\Models\PasaPor;
use Illuminate\Http\Request;
use Session;

class PasaPorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Pasan';
        $pasan = PasaPor::orderBy('id_ruta')->paginate(5); // PAGINACION A 5 RESULTADOS

        return view('pasan.index', compact('title', 'pasan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasan.create');
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
            'id_toponimo' => 'nullable|bigInteger',
            'fecha_y_hora' => 'required',
            ]};

        // Creo la comunidad si ha validado bien los datos
        PasaPor::create($request->all());

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Pasan Por creada correctamente');

        //redirijo a la pagina de dificultades
        return redirect()->route('pasan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PasaPor  $pasaPor
     * @return \Illuminate\Http\Response
     */
    public function show(PasaPor $pasan)
    {
        $title = 'Detalle de Pasa por';
        
        if($pasan == null) {

            return view('errors.404', compact('title', 'pasan'));
        }

        return view('pasan.show', compact('title', 'pasan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PasaPor  $pasan
     * @return \Illuminate\Http\Response
     */
    public function edit(PasaPor $pasan)
    {
        return view('pasan.edit', compact('pasan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PasaPor  $pasan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PasaPor $pasan)
    {
        //Validamos los datos que nos llegan
        $request->validate{[
            'id_ruta' => 'nullable|bigInteger',
            'id_toponimo' => 'nullable|bigInteger',
            'fecha_y_hora' => 'required',
            ]};

        //guardamos en la base de datos
        $pasan->update(
            [
                'id_ruta' => $request['id_ruta'],
                'id_toponimo' => $request['id_toponimo'],
                'fecha_y_hora' => $request['fecha_y_hora'],
            ]
        );

        //mostramos mensaje de confirmación
        Session::flash('message', 'Pasa Por actualizada correctamente');

        //redirigimos al listado de comunidades
        return redirect()->route('pasan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PasaPor  $pasan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PasaPor $pasan)
    {
        $pasan->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Pasa Por borrada correctamente');
        //redirigimos al listado
        return redirect()->route('pasan.index');
    }
}
