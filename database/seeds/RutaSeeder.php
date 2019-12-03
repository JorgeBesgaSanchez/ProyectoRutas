<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Ruta;

class RutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        $IdCamino = DB::table('tipo_caminos')->select('id')->take(1)->get();
        $IdDificultad = DB::table('dificultades')->select('id')->take(1)->get();
        $IdZona = DB::table('zonas')->select('id')->take(1)->get();
        $IdActividad = DB::table('actividades')->select('id')->take(1)->get();
        DB::table('rutas')->insert([
            'nombre' => 'El Chullo',
            'desnivel' => 600,
            'sugerencias' => 'Sugerencias',
            'cartografia' => 'Cartografía',
            'id_camino' => $IdCamino->last()->id,
            'id_dificultad' => $IdDificultad->last()->id,
            'id_zona' => $IdZona->last()->id,
            'id_actividad' => $IdActividad->last()->id,
            'fecha' => '2019-10-10'
        ]);
        
        $IdCamino = DB::table('tipo_caminos')->select('id')->take(2)->get();
        $IdDificultad = DB::table('dificultades')->select('id')->take(2)->get();
        $IdZona = DB::table('zonas')->select('id')->take(2)->get();
        $IdActividad = DB::table('actividades')->select('id')->take(2)->get();
        DB::table('rutas')->insert([
            'nombre' => 'Circular por Celín y Fuente Alta',
            'desnivel' => 1332,
            'sugerencias' => 'Sugerencias',
            'cartografia' => 'Cartografía',
            'id_camino' => $IdCamino->last()->id,
            'id_dificultad' => $IdDificultad->last()->id,
            'id_zona' => $IdZona->last()->id,
            'id_actividad' => $IdActividad->last()->id,
            'fecha' => '2019-10-10'
        ]);
        
        $IdCamino = DB::table('tipo_caminos')->select('id')->take(3)->get();
        $IdDificultad = DB::table('dificultades')->select('id')->take(3)->get();
        $IdZona = DB::table('zonas')->select('id')->take(3)->get();
        $IdActividad = DB::table('actividades')->select('id')->take(3)->get();
        DB::table('rutas')->insert([
            'nombre' => 'Prueba',
            'desnivel' => 999,
            'sugerencias' => 'Sugerencias',
            'cartografia' => 'Cartografía',
            'id_camino' => $IdCamino->last()->id,
            'id_dificultad' => $IdDificultad->last()->id,
            'id_zona' => $IdZona->last()->id,
            'id_actividad' => $IdActividad->last()->id,
            'fecha' => '2019-10-10'
        ]);
        */

        // TRABAJANDO CON MODELOS
        $IdCamino = DB::table('tipo_caminos')->select('id')->take(1)->get();
        $IdDificultad = DB::table('dificultades')->select('id')->take(1)->get();
        $IdZona = DB::table('zonas')->select('id')->take(1)->get();
        $IdActividad = DB::table('actividades')->select('id')->take(1)->get();
        Ruta::create([
            'nombre' => 'El Chullo',
            'desnivel' => 600,
            'sugerencias' => 'Sugerencias',
            'cartografia' => 'Cartografía',
            'id_camino' => $IdCamino->last()->id,
            'id_dificultad' => $IdDificultad->last()->id,
            'id_zona' => $IdZona->last()->id,
            'id_actividad' => $IdActividad->last()->id,
            'fecha' => '2019-10-10'
        ]);
        
        $IdCamino = DB::table('tipo_caminos')->select('id')->take(2)->get();
        $IdDificultad = DB::table('dificultades')->select('id')->take(2)->get();
        $IdZona = DB::table('zonas')->select('id')->take(2)->get();
        $IdActividad = DB::table('actividades')->select('id')->take(2)->get();
        Ruta::create([
            'nombre' => 'Circular por Celín y Fuente Alta',
            'desnivel' => 1332,
            'sugerencias' => 'Sugerencias',
            'cartografia' => 'Cartografía',
            'id_camino' => $IdCamino->last()->id,
            'id_dificultad' => $IdDificultad->last()->id,
            'id_zona' => $IdZona->last()->id,
            'id_actividad' => $IdActividad->last()->id,
            'fecha' => '2019-10-10'
        ]);
        
        $IdCamino = DB::table('tipo_caminos')->select('id')->take(3)->get();
        $IdDificultad = DB::table('dificultades')->select('id')->take(3)->get();
        $IdZona = DB::table('zonas')->select('id')->take(3)->get();
        $IdActividad = DB::table('actividades')->select('id')->take(3)->get();
        Ruta::create([
            'nombre' => 'Prueba',
            'desnivel' => 999,
            'sugerencias' => 'Sugerencias',
            'cartografia' => 'Cartografía',
            'id_camino' => $IdCamino->last()->id,
            'id_dificultad' => $IdDificultad->last()->id,
            'id_zona' => $IdZona->last()->id,
            'id_actividad' => $IdActividad->last()->id,
            'fecha' => '2019-10-10'
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        for ($i=4; $i<=13; $i++) {
            $IdCamino = DB::table('tipo_caminos')->select('id')->take(rand(1,$i))->get();
            $IdDificultad = DB::table('dificultades')->select('id')->take(rand(1,$i))->get();
            $IdZona = DB::table('zonas')->select('id')->take(rand(1,$i))->get();
            $IdActividad = DB::table('actividades')->select('id')->take(rand(1,$i))->get();
            factory(Ruta::class)->create([
                'id_camino' => $IdCamino->last()->id,
                'id_dificultad' => $IdDificultad->last()->id,
                'id_zona' => $IdZona->last()->id,
                'id_actividad' => $IdActividad->last()->id,
            ]);
        };
        
    }
}
