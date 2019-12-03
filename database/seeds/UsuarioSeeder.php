<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        DB::table('usuarios')->insert([
            'nombre' => 'Usuario borrado',
            'email' => 'email borrado',
            'contraseña' => 'contraseña borrada'
        ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Jorge',
            'email' => 'jorge@email.com',
            'contraseña' => bcrypt('secreto')
        ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Usuario',
            'email' => 'usuario@email.com',
            'contraseña' => bcrypt('secreto')
        ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Prueba',
            'email' => 'prueba@email.com',
            'contraseña' => bcrypt('secreto')
        ]);
        */

        // TRABAJANDO CON MODELOS
        Usuario::create([
            'nombre' => 'Usuario borrado',
            'email' => 'email borrado',
            'contraseña' => 'contraseña borrada'
        ]);

        Usuario::create([
            'nombre' => 'Jorge',
            'email' => 'jorge@email.com',
            'contraseña' => bcrypt('secreto')
        ]);

        Usuario::create([
            'nombre' => 'Usuario',
            'email' => 'usuario@email.com',
            'contraseña' => bcrypt('secreto')
        ]);

        Usuario::create([
            'nombre' => 'Prueba',
            'email' => 'prueba@email.com',
            'contraseña' => bcrypt('secreto')
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        factory(Usuario::class)->times(10)->create();
    }
}
