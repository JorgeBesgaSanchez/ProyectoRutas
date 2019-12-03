<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'tipo_marchas',
            'tipo_caminos',
            'dificultades',
            'zonas',
            'comunidades',
            'actividades',
            'usuarios',
            'rutas',
            'recorren',
            'provincias',
            'toponimos',
            'pasan',
            'situadas',
            'inscriben',
            'posts'
        ]);

        $this->call(TipoMarchaSeeder::class);
        $this->call(TipoCaminoSeeder::class);
        $this->call(DificultadSeeder::class);
        $this->call(ZonaSeeder::class);
        $this->call(ComunidadSeeder::class);
        $this->call(ActividadSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(RutaSeeder::class); 
        $this->call(RecorreSeeder::class); 
        $this->call(ProvinciaSeeder::class); 
        $this->call(PostSeeder::class); 
        $this->call(ToponimoSeeder::class); 
        $this->call(PasaSeeder::class); 
        $this->call(SituadaSeeder::class); 
        $this->call(InscribeSeeder::class); //-----------------
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }
}
