<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('rutas');

        Schema::create('rutas', function (Blueprint $table) {
            //equivalente a un BIGINT sin signo (llave primaria) Auto-incremento
            $table->bigIncrements('id');
            //equivalente a un VARCHAR con longitud opcional
            $table->string('nombre', 150);
            //equivalente a un INTEGER
            $table->integer('desnivel');
            //equivalente a un TEXT
            $table->text('sugerencias');
            //equivalente a un VARCHAR
            $table->string('cartografia', 150);

            //equivalente a un BIGINT (para relacionarlo con el id de la tabla tipo_caminos)
            $table->bigInteger('id_camino')->nullable()->unsigned();
            //equivalente a un BIGINT (para relacionarlo con el id de la tabla dificultad)
            $table->bigInteger('id_dificultad')->nullable()->unsigned();
            //equivalente a un BIGINT (para relacionarlo con el id de la tabla zona)
            $table->bigInteger('id_zona')->nullable()->unsigned();
            //equivalente a un BIGINT (para relacionarlo con el id de la tabla actividad)
            $table->bigInteger('id_actividad')->nullable()->unsigned();
            //equivalente a un DATE
            $table->date('fecha');
            //por defecto de laravel
            $table->timestamps();

            //claves foráneas
            $table->foreign('id_camino')->references('id')->on('tipo_caminos')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_dificultad')->references('id')->on('dificultades')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_zona')->references('id')->on('zonas')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_actividad')->references('id')->on('actividades')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutas');
    }
}
