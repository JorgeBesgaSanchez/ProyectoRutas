<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Inscribe;

class InscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        $IdActividad = DB::table('actividades')->select('id')->take(1)->get();
        $IdUsuario = DB::table('usuarios')->select('id')->take(1)->get();
        DB::table('inscriben')->insert([
            'id_actividad' => $IdActividad->last()->id,
            'id_usuario' => $IdUsuario->last()->id,
            'fecha_y_hora' => '2019-11-04 00:00:00'
        ]);

        $IdActividad = DB::table('actividades')->select('id')->take(2)->get();
        $IdUsuario = DB::table('usuarios')->select('id')->take(2)->get();
        DB::table('inscriben')->insert([
            'id_actividad' => $IdActividad->last()->id,
            'id_usuario' => $IdUsuario->last()->id,
            'fecha_y_hora' => '2019-11-04 00:00:00'
        ]);

        $IdActividad = DB::table('actividades')->select('id')->take(3)->get();
        $IdUsuario = DB::table('usuarios')->select('id')->take(3)->get();
        DB::table('inscriben')->insert([
            'id_actividad' => $IdActividad->last()->id,
            'id_usuario' => $IdUsuario->last()->id,
            'fecha_y_hora' => '2019-11-04 00:00:00'
        ]);
        */

        // TRABAJANDO CON LOS MODELOS
        $IdActividad = DB::table('actividades')->select('id')->take(1)->get();
        $IdUsuario = DB::table('usuarios')->select('id')->take(1)->get();
        Inscribe::create([
            'id_actividad' => $IdActividad->last()->id,
            'id_usuario' => $IdUsuario->last()->id,
            'fecha_y_hora' => '2019-11-04 00:00:00'
        ]);

        $IdActividad = DB::table('actividades')->select('id')->take(2)->get();
        $IdUsuario = DB::table('usuarios')->select('id')->take(2)->get();
        Inscribe::create([
            'id_actividad' => $IdActividad->last()->id,
            'id_usuario' => $IdUsuario->last()->id,
            'fecha_y_hora' => '2019-11-04 00:00:00'
        ]);

        $IdActividad = DB::table('actividades')->select('id')->take(3)->get();
        $IdUsuario = DB::table('usuarios')->select('id')->take(3)->get();
        Inscribe::create([
            'id_actividad' => $IdActividad->last()->id,
            'id_usuario' => $IdUsuario->last()->id,
            'fecha_y_hora' => '2019-11-04 00:00:00'
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        for($i=4; $i<=13; $i++){
            $IdActividad = DB::table('actividades')->select('id')->take(rand(1,$i))->get();
            $IdUsuario = DB::table('usuarios')->select('id')->take(rand(1,$i))->get();
            factory(Inscribe::class)->create([
                'id_actividad' => $IdActividad->last()->id,
                'id_usuario' => $IdUsuario->last()->id,
            ]);
        }
    }
}
