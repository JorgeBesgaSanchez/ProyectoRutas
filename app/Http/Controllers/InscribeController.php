<?php

namespace App\Http\Controllers;

use App\Models\Inscribe;
use Illuminate\Http\Request;
use Session;
use DateTime;

class InscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Inscriben';
        $inscriben = Inscribe::orderBy('id_actividad')->paginate(5); // PAGINACION A 5 RESULTADOS

        return view('inscriben.index', compact('title', 'inscriben'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inscriben.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // obtengo la fecha actual y la formateo
        $now = new \DateTime();
        //$now = $now->format('d-m-Y H:i:s');
        $now = $now->format('Y-m-d H:i:s');
        //dd($now);
        //dd($request);

        //validamos lo que nos llega del formulario
        $request->validate{[
            'id_actividad' => 'nullable|bigInteger',
            'id_usuario' => 'nullable|bigInteger',
            'fecha_y_hora' => 'nullable',
            ]};

        // Creo la comunidad si ha validado bien los datos
        Inscribe::create(
            [
                'id_actividad' => $request['id_actividad'],
                'id_usuario' => $request['id_usuario'],
                'fecha_y_hora' => $request['fecha_y_hora'],
            ]
        );

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Inscripción creada correctamente');

        //redirijo a la pagina de dificultades
        return redirect()->route('inscriben.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscribe  $inscriben
     * @return \Illuminate\Http\Response
     */
    public function show(Inscribe $inscriben)
    {
        $title = 'Detalle de inscriben';
        
        if($inscriben == null) {

            return view('errors.404', compact('title', 'inscriben'));
        }

        return view('inscriben.show', compact('title', 'inscriben'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscribe  $inscriben
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscribe $inscriben)
    {
        return view('inscriben.edit', compact('inscriben'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inscribe  $inscriben
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscribe $inscriben)
    {
        //Validamos los datos que nos llegan
        $request->validate{[
            'id_actividad' => 'nullable|bigInteger',
            'id_usuario' => 'nullable|bigInteger',
            'fecha_y_hora' => 'nullable',

            ]};
        //guardamos en la base de datos
        $inscriben->update(
            [
                'id_actividad' => $request['id_actividad'],
                'id_usuario' => $request['id_usuario'],
                'fecha_y_hora' => $request['fecha_y_hora'],
            ]
        );

        //mostramos mensaje de confirmación
        Session::flash('message', 'Inscripción actaulizada correctamente');
        
        //redirigimos al listado de comunidades
        return redirect()->route('inscriben.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modles\Inscribe  $inscriben
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscribe $inscriben)
    {
        $inscriben->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Inscripción borrada correctamente');
        //redirigimos al listado
        return redirect()->route('inscriben.index');
    }
}
