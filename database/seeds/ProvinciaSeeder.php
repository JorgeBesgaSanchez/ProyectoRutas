<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Provincia;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        $IdComunidad = DB::table('comunidades')->select('id')->take(1)->get();
        DB::table('provincias')->insert([
            'id_provincia' => 1,
            'nombre' => 'Sin información',
            'id_comunidad' => $IdComunidad->last()->id,
        ]);
        
        $IdComunidad = DB::table('comunidades')->select('id')->take(2)->get();
        DB::table('provincias')->insert([
            'id_provincia' => 2,
            'nombre' => 'Almería',
            'id_comunidad' => $IdComunidad->last()->id
        ]);
        
        $IdComunidad = DB::table('comunidades')->select('id')->take(2)->get();
        DB::table('provincias')->insert([
            'id_provincia' => 3,
            'nombre' => 'Cádiz',
            'id_comunidad' => $IdComunidad->last()->id
        ]);
        
        $IdComunidad = DB::table('comunidades')->select('id')->take(3)->get();
        DB::table('provincias')->insert([
            'id_provincia' => 4,
            'nombre' => 'Prueba',
            'id_comunidad' => $IdComunidad->last()->id
        ]);
        */

        // TRABAJANDO CON MODELOS
        $IdComunidad = DB::table('comunidades')->select('id')->take(1)->get();
        Provincia::create([
            'id_provincia' => 1,
            'nombre' => 'Sin información',
            'id_comunidad' => $IdComunidad->last()->id,
        ]);
        
        $IdComunidad = DB::table('comunidades')->select('id')->take(2)->get();
        Provincia::create([
            'id_provincia' => 2,
            'nombre' => 'Almería',
            'id_comunidad' => $IdComunidad->last()->id
        ]);
        
        $IdComunidad = DB::table('comunidades')->select('id')->take(2)->get();
        Provincia::create([
            'id_provincia' => 3,
            'nombre' => 'Cádiz',
            'id_comunidad' => $IdComunidad->last()->id
        ]);
        
        $IdComunidad = DB::table('comunidades')->select('id')->take(3)->get();
        Provincia::create([
            'id_provincia' => 4,
            'nombre' => 'Prueba',
            'id_comunidad' => $IdComunidad->last()->id
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        for ($i=4; $i<=13; $i++) {

            $IdComunidad = DB::table('comunidades')->select('id')->take(rand(1,$i))->get();
            factory(Provincia::class)->create([

                'id_comunidad' => $IdComunidad->last()->id,
            ]);
        }
    }
}
