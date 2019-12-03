<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Situada;

class SituadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        $IdProvincia = DB::table('provincias')->select('id')->take(1)->get();
        $IdZona = DB::table('zonas')->select('id')->take(1)->get();
        DB::table('situadas')->insert([
            'id_provincia' => $IdProvincia->last()->id,
            'id_zona' => $IdZona->last()->id,
        ]);

        $IdProvincia = DB::table('provincias')->select('id')->take(1)->get();
        $IdZona = DB::table('zonas')->select('id')->take(2)->get();
        DB::table('situadas')->insert([
            'id_provincia' => $IdProvincia->last()->id,
            'id_zona' => $IdZona->last()->id,
        ]);

        $IdProvincia = DB::table('provincias')->select('id')->take(1)->get();
        $IdZona = DB::table('zonas')->select('id')->take(3)->get();
        DB::table('situadas')->insert([
            'id_provincia' => $IdProvincia->last()->id,
            'id_zona' => $IdZona->last()->id,
        ]);
        */

        // TRABAJANDO CON MODELOS
        $IdProvincia = DB::table('provincias')->select('id')->take(1)->get();
        $IdZona = DB::table('zonas')->select('id')->take(1)->get();
        Situada::create([
            'id_provincia' => $IdProvincia->last()->id,
            'id_zona' => $IdZona->last()->id,
        ]);

        $IdProvincia = DB::table('provincias')->select('id')->take(2)->get();
        $IdZona = DB::table('zonas')->select('id')->take(2)->get();
        Situada::create([
            'id_provincia' => $IdProvincia->last()->id,
            'id_zona' => $IdZona->last()->id,
        ]);

        $IdProvincia = DB::table('provincias')->select('id')->take(3)->get();
        $IdZona = DB::table('zonas')->select('id')->take(3)->get();
        Situada::create([
            'id_provincia' => $IdProvincia->last()->id,
            'id_zona' => $IdZona->last()->id,
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        for ($i=4; $i<=13; $i++) {
            $IdProvincia = DB::table('provincias')->select('id')->take(rand(1,$i))->get();
            $IdZona = DB::table('zonas')->select('id')->take(rand(1,$i))->get();
            factory(Situada::class)->create([
                'id_provincia' => $IdProvincia->last()->id,
                'id_zona' => $IdZona->last()->id,
            ]);
        }
    }
}
