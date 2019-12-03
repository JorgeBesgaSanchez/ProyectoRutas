<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        $Idusuario = DB::table('usuarios')->select('id')->take(1)->get();
        $IdRuta = DB::table('rutas')->select('id')->take(1)->get();
        DB::table('posts')->insert([
            'texto' => 'Texto post 1',
            'id_usuario' => $Idusuario->last()->id,
            'id_ruta' => $IdRuta->last()->id,
            'fecha_y_hora' => '2019-11-05 00:00:00'
        ]);
        
        $Idusuario = DB::table('usuarios')->select('id')->take(2)->get();
        $IdRuta = DB::table('rutas')->select('id')->take(2)->get();
        DB::table('posts')->insert([
            'texto' => 'Texto post 2',
            'id_usuario' => $Idusuario->last()->id,
            'id_ruta' => $IdRuta->last()->id,
            'fecha_y_hora' => '2019-11-05 00:00:00'
        ]);
        
        $Idusuario = DB::table('usuarios')->select('id')->take(3)->get();
        $IdRuta = DB::table('rutas')->select('id')->take(3)->get();
        DB::table('posts')->insert([
            'texto' => 'Prueba',
            'id_usuario' => $Idusuario->last()->id,
            'id_ruta' => $IdRuta->last()->id,
            'fecha_y_hora' => '2019-11-05 00:00:00'
        ]);
        */

        // TRABAJANDO CON MODELOS
        $Idusuario = DB::table('usuarios')->select('id')->take(1)->get();
        $IdRuta = DB::table('rutas')->select('id')->take(1)->get();
        Post::create([
            'texto' => 'Texto post 1',
            'id_usuario' => $Idusuario->last()->id,
            'id_ruta' => $IdRuta->last()->id,
            'fecha_y_hora' => '2019-11-05 00:00:00'
        ]);
        
        $Idusuario = DB::table('usuarios')->select('id')->take(2)->get();
        $IdRuta = DB::table('rutas')->select('id')->take(2)->get();
        Post::create([
            'texto' => 'Texto post 2',
            'id_usuario' => $Idusuario->last()->id,
            'id_ruta' => $IdRuta->last()->id,
            'fecha_y_hora' => '2019-11-05 00:00:00'
        ]);
        
        $Idusuario = DB::table('usuarios')->select('id')->take(3)->get();
        $IdRuta = DB::table('rutas')->select('id')->take(3)->get();
        Post::create([
            'texto' => 'Prueba',
            'id_usuario' => $Idusuario->last()->id,
            'id_ruta' => $IdRuta->last()->id,
            'fecha_y_hora' => '2019-11-05 00:00:00'
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        for ($i=4; $i<=13; $i++) {
            $Idusuario = DB::table('usuarios')->select('id')->take(rand(1,$i))->get();
            $IdRuta = DB::table('rutas')->select('id')->take(rand(1,$i))->get();
            factory(Post::class)->create([
                'id_usuario' => $Idusuario->last()->id,
                'id_ruta' => $IdRuta->last()->id,
            ]);
        }
    }
}
