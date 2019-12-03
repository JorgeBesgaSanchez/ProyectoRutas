<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Toponimo;

class ToponimoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        $IdToponimo = DB::table('provincias')->select('id')->get();
        DB::table('toponimos')->insert([
            'nombre' => 'El Chullo',
            'id_provincia' => $IdToponimo[1]->id
        ]);
        
        $IdToponimo = DB::table('provincias')->select('id')->take(2)->get();
        DB::table('toponimos')->insert([
            'nombre' => 'Celín',
            'id_provincia' => $IdToponimo->last()->id
        ]);

        $IdToponimo = DB::table('provincias')->select('id')->take(3)->get();
        DB::table('toponimos')->insert([
            'nombre' => 'Prueba',
            'id_provincia' => $IdToponimo->last()->id
        ]);

        $IdToponimo = DB::table('provincias')->select('id')->take(4)->get();
        DB::table('toponimos')->insert([
            'nombre' => 'Otra Prueba',
            'id_provincia' => $IdToponimo->last()->id
        ]);
        */

        // TRABAJANDO CON MODELOS
        $IdToponimo = DB::table('provincias')->select('id')->get();
        Toponimo::create([
            'nombre' => 'El Chullo',
            'id_provincia' => $IdToponimo[1]->id
        ]);
        
        $IdToponimo = DB::table('provincias')->select('id')->take(2)->get();
        Toponimo::create([
            'nombre' => 'Celín',
            'id_provincia' => $IdToponimo->last()->id
        ]);

        $IdToponimo = DB::table('provincias')->select('id')->take(3)->get();
        Toponimo::create([
            'nombre' => 'Prueba',
            'id_provincia' => $IdToponimo->last()->id
        ]);

        $IdToponimo = DB::table('provincias')->select('id')->take(4)->get();
        Toponimo::create([
            'nombre' => 'Otra Prueba',
            'id_provincia' => $IdToponimo->last()->id
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        for ($i=4; $i<=13; $i++) {
            $IdToponimo = DB::table('provincias')->select('id')->take(rand(1,$i))->get();
            factory(Toponimo::class)->create([
                'id_provincia' => $IdToponimo->last()->id,
            ]);
        }

        
    }
}
