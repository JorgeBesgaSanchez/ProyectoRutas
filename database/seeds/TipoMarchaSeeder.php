<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tipo_marcha;

class TipoMarchaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        DB::table('tipo_marchas')->insert([
            'nombre' => 'Circular'
        ]);

        DB::table('tipo_marchas')->insert([
            'nombre' => 'De ida y vuelta'
        ]);

        DB::table('tipo_marchas')->insert([
            'nombre' => 'Prueba'
        ]);
        */

        // TRABAJANDO CON MODELOS
        Tipo_marcha::create([
            'nombre' => 'Circular'
        ]);

        Tipo_marcha::create([
            'nombre' => 'De ida y vuelta'
        ]);

        Tipo_marcha::create([
            'nombre' => 'Prueba'
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        factory(Tipo_marcha::class)->times(10)->create();
    }
}
