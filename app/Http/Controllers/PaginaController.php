<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Session;

class PaginaController extends Controller
{
    public function deportes() {
        $title = 'Actividades';

        return view('paginas.deportes', compact('title', 'actividades'));
    }

    public function datos() {
        $title = 'Datos';

        return view('paginas.datos', compact('title', 'datos'));
    }

    public function login() {
        $title = 'Login';

        return view('paginas.login',compact('title', 'login'));
    }

    public function registro() {
        $title = 'Registro';

        return view('paginas.registro', compact('title', 'registro'));
    }

    public function senderos() {
        $title = 'Senderos';

        return view('paginas.senderos', compact('title', 'senderos'));
    }

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
        
        //dd('validado');

        //encripto la contraseña
        $pass = bcrypt($request['contraseña']);

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
        return redirect()->route('inicio');
    }

    public function entrar(Request $request, Usuario $usuario) {
        //dd($request);
        //validamos
        $request->validate(
            [
                'email' => 'required|unique:usuarios,email',
                'contraseña' => 'required',
            ]
        );


        $email = $request->email;
        $contraseña = $request->contraseña;
        //dd($email, $contraseña);
        //buscar en la tabla usuarios el email y que la contraseña coincida

        if(!Hash::check($contraseña,Auth::user()->contraseña)){
            return "";
            

        $usuario = Usuario::where('email', $email)
                                ->where('contraseña', $contraseña)                    
                                ->get();
        dd($usuario);
    }
}

