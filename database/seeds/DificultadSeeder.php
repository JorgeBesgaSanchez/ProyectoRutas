<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Dificultad;

class DificultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        DB::table(('dificultades'))->insert([
            'nombre' => 'Sin información'
        ]);

        DB::table(('dificultades'))->insert([
            'nombre' => 'Baja'
        ]);

        DB::table(('dificultades'))->insert([
            'nombre' => 'Media'
        ]);

        DB::table(('dificultades'))->insert([
            'nombre' => 'Prueba'
        ]);
        */

        // TRABAJANDO CON LOS MODELOS
        Dificultad::create([
            'nombre' => 'Sin información'
        ]);

        Dificultad::create([
            'nombre' => 'Baja'
        ]);

        Dificultad::create([
            'nombre' => 'Media'
        ]);

        Dificultad::create([
            'nombre' => 'Prueba'
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        factory(Dificultad::class)->times(10)->create();
    }
}
