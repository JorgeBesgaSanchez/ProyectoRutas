<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

//use Session;

class PaginaController extends Controller
{
    public function deportes()
    {
        $title = 'Actividades';

        return view('paginas.deportes', compact('title', 'actividades'));
    }

    public function datos()
    {
        $title = 'Datos';

        return view('paginas.datos', compact('title', 'datos'));
    }

    public function login()
    {
        $title = 'Login';

        return view('paginas.login', compact('title', 'login'));
    }

    public function registro()
    {
        $title = 'Registro';

        return view('paginas.registro', compact('title', 'registro'));
    }

    public function senderos()
    {
        $title = 'Senderos';

        return view('paginas.senderos', compact('title', 'senderos'));
    }

    //guarda el usuario registrado
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
        return redirect()->route('inicio');
    }

    //comprueba el email y la contraseña que nos llegan del formulario
    public function entrar(Request $request)
    {
        //validamos campos del formulario
        $request->validate(
            [
                'email' => 'required',
                'contraseña' => 'required'
            ]
        );

        $email = $request->email;
        $contraseña = md5($request->contraseña);

        $resultado = Usuario::validar($request, $email, $contraseña);


        //si el los datos no son válidos, me devolverá un null
        if ($resultado == null) {
            $request->session()->flash('message', 'Email o contraseña inválidos');
            //redirijo a la pagina de login
            return redirect()->route('paginas.login');

        } else {
            $request->session()->flash('message', 'Te has logeado correctamente');
            return redirect()->route('inicio');
        }

    }
}

