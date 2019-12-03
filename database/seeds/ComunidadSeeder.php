<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Comunidad;

class ComunidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* TRABAJANDO CON EL CONSTRUCTOR DE CONSULTAS
        DB::table('comunidades')->insert([
            'nombre' => 'Andalucía'
        ]);

        DB::table('comunidades')->insert([
            'nombre' => 'Murcia'
        ]);

        DB::table('comunidades')->insert([
            'nombre' => 'Prueba'
        ]);
        */

        // TRABAJANDO CON LOS MODELOS
        Comunidad::create([
            'nombre' => 'Andalucía'
        ]);

        Comunidad::create([
            'nombre' => 'Murcia'
        ]);

        Comunidad::create([
            'nombre' => 'Prueba'
        ]);

        // TRABAJANDO CON LOS MODELS FACTORIES
        factory(Comunidad::class)->times(10)->create();

    }
}
