<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PasaPor;

class PasaSeeder extends Seeder
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
        $IdToponimo = DB::table('toponimos')->select('id')->take(1)->get();
        DB::table('pasan')->insert([
            'id_ruta' => $IdRuta->last()->id,
            'id_toponimo' => $IdToponimo->last()->id,
        ]);

        $IdRuta = DB::table('rutas')->select('id')->take(2)->get();
        $IdToponimo = DB::table('toponimos')->select('id')->take(3)->get();
        DB::table('pasan')->insert([
            'id_ruta' => $IdRuta->last()->id,
            'id_toponimo' => $IdToponimo->last()->id,
        ]);

        $IdRuta = DB::table('rutas')->select('id')->take(3)->get();
        $IdToponimo = DB::table('toponimos')->select('id')->take(3)->get();
        DB::table('pasan')->insert([
            'id_ruta' => $IdRuta->last()->id,
            'id_toponimo' => $IdToponimo->last()->id,
        ]);
        */

        // TRABAJANDO CON MODELOS
        $IdRuta = DB::table('rutas')->select('id')->take(1)->get();
        $IdToponimo = DB::table('toponimos')->select('id')->take(1)->get();
        PasaPor::create([
            'id_ruta' => $IdRuta->last()->id,
            'id_toponimo' => $IdToponimo->last()->id,
        ]);

        $IdRuta = DB::table('rutas')->select('id')->take(2)->get();
        $IdToponimo = DB::table('toponimos')->select('id')->take(3)->get();
        PasaPor::create([
            'id_ruta' => $IdRuta->last()->id,
            'id_toponimo' => $IdToponimo->last()->id,
        ]);

        $IdRuta = DB::table('rutas')->select('id')->take(3)->get();
        $IdToponimo = DB::table('toponimos')->select('id')->take(3)->get();
        PasaPor::create([
            'id_ruta' => $IdRuta->last()->id,
            'id_toponimo' => $IdToponimo->last()->id,
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        for($i=4; $i<=14; $i++){
            $IdRuta = DB::table('rutas')->select('id')->take(rand(1,$i))->get();
            $IdToponimo = DB::table('toponimos')->select('id')->take(rand(1,$i))->get();
            factory(PasaPor::class)->create([
                'id_ruta' => $IdRuta->last()->id,
                'id_toponimo' => $IdToponimo->last()->id,
            ]);
        }
    }
}
