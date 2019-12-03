<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Zona;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        DB::table('zonas')->insert([
            'nombre' => 'Sin información'
        ]);

        DB::table('zonas')->insert([
            'nombre' => 'Sierra Nevada'
        ]);

        DB::table('zonas')->insert([
            'nombre' => 'Sierra de Gádor'
        ]);

        DB::table('zonas')->insert([
            'nombre' => 'Prueba'
        ]);
        */

        // TRABAJANDO CON MODELOS
        Zona::create([
            'nombre' => 'Sin información'
        ]);

        Zona::create([
            'nombre' => 'Sierra Nevada'
        ]);

        Zona::create([
            'nombre' => 'Sierra de Gádor'
        ]);

        Zona::create([
            'nombre' => 'Prueba'
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        factory(Zona::class)->times(10)->create();
    }
}
