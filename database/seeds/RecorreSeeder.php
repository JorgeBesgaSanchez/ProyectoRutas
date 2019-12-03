<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Recorre;

class RecorreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        $IdRuta = DB::table('rutas')->select('id')->take(1)->get();
        $IdCamino = DB::table('tipo_caminos')->select('id')->take(1)->get();
        DB::table('recorren')->insert([
            'id_ruta' => $IdRuta->last()->id,
            'id_camino' => $IdCamino->last()->id,
        ]);

        $IdRuta = DB::table('rutas')->select('id')->take(2)->get();
        $IdCamino = DB::table('tipo_caminos')->select('id')->take(2)->get();
        DB::table('recorren')->insert([
            'id_ruta' => $IdRuta->last()->id,
            'id_camino' => $IdCamino->last()->id,
        ]);

        $IdRuta = DB::table('rutas')->select('id')->take(3)->get();
        $IdCamino = DB::table('tipo_caminos')->select('id')->take(3)->get();
        DB::table('recorren')->insert([
            'id_ruta' => $IdRuta->last()->id,
            'id_camino' => $IdCamino->last()->id,
        ]);
        */

        // TRABAJANDO CON MODELOS
        $IdRuta = DB::table('rutas')->select('id')->take(1)->get();
        $IdCamino = DB::table('tipo_caminos')->select('id')->take(1)->get();
        Recorre::create([
            'id_ruta' => $IdRuta->last()->id,
            'id_camino' => $IdCamino->last()->id,
        ]);

        $IdRuta = DB::table('rutas')->select('id')->take(2)->get();
        $IdCamino = DB::table('tipo_caminos')->select('id')->take(2)->get();
        Recorre::create([
            'id_ruta' => $IdRuta->last()->id,
            'id_camino' => $IdCamino->last()->id,
        ]);

        $IdRuta = DB::table('rutas')->select('id')->take(3)->get();
        $IdCamino = DB::table('tipo_caminos')->select('id')->take(3)->get();
        Recorre::create([
            'id_ruta' => $IdRuta->last()->id,
            'id_camino' => $IdCamino->last()->id,
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        for ($i=4; $i<=13; $i++) {
            $IdRuta = DB::table('rutas')->select('id')->take(rand(1,$i))->get();
            $IdCamino = DB::table('tipo_caminos')->select('id')->take(rand(1,$i))->get();

            factory(Recorre::class)->create([
                'id_ruta' => $IdRuta->last()->id,
                'id_camino' => $IdCamino->last()->id,
            ]);
        }
        
    }
}
