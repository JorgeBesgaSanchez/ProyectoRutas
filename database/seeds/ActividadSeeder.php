<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Actividad;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        DB::table('actividades')->insert([
            'nombre' => 'Sin informacion'
        ]);

        DB::table('actividades')->insert([
            'nombre' => 'Senderismo'
        ]);

        DB::table('actividades')->insert([
            'nombre' => 'Bicicleta de montaña'
        ]);

        DB::table('actividades')->insert([
            'nombre' => 'Prueba'
        ]);
*/
        // TRABAJANDO CON LOS MODELOS
        Actividad::create([
            'nombre' => 'Sin informacion'
        ]);

        Actividad::create([
            'nombre' => 'Senderismo'
        ]);

        Actividad::create([
            'nombre' => 'Bicicleta de montaña'
        ]);

        Actividad::create([
            'nombre' => 'Prueba'
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        factory(Actividad::class)->times(10)->create();
    }
}
