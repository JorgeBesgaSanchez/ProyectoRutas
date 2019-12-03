<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tipo_camino;

class TipoCaminoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        DB::table('tipo_caminos')->insert([
            'nombre' => 'Sin información'
        ]);

        DB::table('tipo_caminos')->insert([
            'nombre' => 'Sendero'
        ]);

        DB::table('tipo_caminos')->insert([
            'nombre' => 'Pista forestal'
        ]);

        DB::table('tipo_caminos')->insert([
            'nombre' => 'Prueba'
        ]);
        */

        // TRABAJANDO CON MODELOS
        Tipo_camino::create([
            'nombre' => 'Sin información'
        ]);

        Tipo_camino::create([
            'nombre' => 'Sendero'
        ]);

        Tipo_camino::create([
            'nombre' => 'Pista forestal'
        ]);

        Tipo_camino::create([
            'nombre' => 'Prueba'
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        factory(Tipo_camino::class)->times(10)->create();
    }
}
