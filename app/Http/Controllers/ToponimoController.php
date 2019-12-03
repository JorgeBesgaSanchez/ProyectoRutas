<?php

namespace App\Http\Controllers;

use App\Models\Toponimo;
use Illuminate\Http\Request;
use Session;

class ToponimoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Toponimos';
        $toponimos = Toponimo::orderBy('nombre')->paginate(5); // PAGINACION A 5 RESULTADOS
        //$item = Provincia::findByIdProvincia();
        /*
        foreach ($toponimos as $topo) {
            //dd($topo->provincias());
            //dd($provincias);
            //$id = $provincias->id;
            //dd($id);
            //dd($topo->id_provincia);
        }
        */
        /*
        $topo = Toponimo::find(3);
        $provincias = $topo->provincias();
        dd($provincias);
        */
        return view('toponimos.index', compact('title', 'toponimos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('toponimos.create');
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
        Toponimo::create($request->all());

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Toponimo creado correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('toponimos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toponimo  $toponimo
     * @return \Illuminate\Http\Response
     */
    public function show(Toponimo $toponimo)
    {
        $title = 'Detalle de toponimos';
        
        if($toponimo == null) {

            return view('errors.404', compact('title', 'toponimo'));
        }
        
        return view('toponimos.show', compact('title', 'toponimo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toponimo  $toponimo
     * @return \Illuminate\Http\Response
     */
    public function edit(Toponimo $toponimo)
    {
        return view('toponimos.edit', compact('toponimo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toponimo  $toponimo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toponimo $toponimo)
    {
        //validamos lo que nos llega del formulario
        $request->validate(
            [
                'nombre' => 'required',
            ]
            );

        // Creo situada si ha validado bien los datos
        $toponimo->update(
            [
                'nombre' => $request['nombre'],
            ]
        );
        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Toponimo actualizada correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('toponimos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toponimo  $toponimo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toponimo $toponimo)
    {
        $toponimo->delete();
        //mensaje de confirmacion
        Session::flash('message', 'Toponimo borrado correctamente');
        //redirigimos al listado
        return redirect()->route('toponimos.index');
    }

    


}
