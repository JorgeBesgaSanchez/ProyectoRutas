<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Session;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo md5('12345');
        //echo "<br>";
        //echo md5('12345');
        //exit;
        $title = 'Usuarios';
        $usuarios = Usuario::orderBy('nombre')->paginate(5); // PAGINACION A 5 RESULTADOS

        return view('usuarios.index', compact('title', 'usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //validamos lo que nos llega del formulario
        $request->validate(
            [
                'nombre' => 'required',
                'email' => 'required|unique:usuarios,email',
                'contraseña' => 'required',
            ]
        );
        
        //encripto la contraseña
        // ---------- NO UTILIZAR BCRYPT, UTILIZAR MD5 --------------
        $pass = md5($request['contraseña']);

        //dd($request->contraseña);

        // Creo situada si ha validado bien los datos
        Usuario::create([
            'nombre' => $request['nombre'],
            'email' => $request['email'],
            'contraseña' => $pass,
        ]);

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Usuario creado correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    //public function show(Usuario $usuario)
    public function show(Usuario $usuario)
    {
        $title = 'Detalle de Usuario';
        
        if($usuario == null) {

            return view('errors.404', compact('title', 'usuario'));
        }

        return view('usuarios.show', compact('title','usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //validamos lo que nos llega del formulario
        $request->validate(
            [
                'nombre' => 'required',
                'email' => 'required',
                'contraseña' => 'required',
            ]
            );

        // Creo situada si ha validado bien los datos
        $usuario->update([
            'nombre' => $request['nombre'],
            'email' => $request['email'],
            //la contraseña va encriptada
            'contraseña' => md5($request['contraseña']),
        ]);

        //muestro mensaje de confirmacion
        $request->session()->flash('message', 'Usuario actualizado correctamente');

        //redirijo a la pagina de recorren
        return redirect()->route('usuarios.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        //muestro mensaje de confirmación
        Session::flash('message', 'Usuario borrado correctamente');
        //redirigimos al listado
        return redirect()->route('usuarios.index');
    }

    // ---------- METODOS AUXILIARES ----------
    
}
