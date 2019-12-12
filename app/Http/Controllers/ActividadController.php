<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use Session;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Actividades';
        //utilizo Eloquent para octener todos los registros
        $actividades = Actividad::orderBy('nombre')->paginate(5); // PAGINACION A 5 RESULTADOS
        //tambien podría obtener los registros con el constructor de consultas
        //$actividades = DB::table('actividades')->get();


        return view('actividades.index', compact('title', 'actividades'));
        //también podemos obtener la vista se esta manera
        //return view('actividades.index')
        //    ->with('nombre', Actividad::all())
        //    ->with('title', 'Actividades');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('actividades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->all();

        // validamos lo que nos llega del formulario
        $request->validate(
            ['nombre' => 'required']
        );
        
        // Creo el empleado si ha validado bien los datos
        Actividad::create([
            'nombre' => $request['nombre'],
        ]);

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Actividad creada correctamente');

        //redirijo a la pagina de actividades
        return redirect()->route('actividades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actividad  $actividade
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividade)
    {
        $title = 'Detalle de Actividad';
        
        if($actividade == null) {

            return view('errors.404', compact('title', 'actividade'));
        }

        return view('actividades.show', compact('title', 'actividade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividad  $actividade
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividade)
    {
        return view('actividades.edit', compact('actividade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actividad  $actividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividad $actividade)
    {
        //Validamos los datos que nos llegan
        $request->validate{[
            'nombre' => 'required'
        ]};

        //guardamos en la base de datos
        $actividade->update(
            [
                'nombre' => $request['nombre'],
            ]
        );

        //mostramos mensaje de confirmación
        Session::flash('message', 'Actividad actualizada correctamente');

        //redirigimos al listado de actividades
        return redirect()->route('actividades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividad  $actividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividade)
    {
        $actividade->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Actividad borrada correctamente');
        //redirigimos al listado
        return redirect()->route('actividades.index');
    }

    








}
