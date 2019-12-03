<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDificultadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('dificultades');

        Schema::create('dificultades', function (Blueprint $table) {
            //equivalente a un BIGINT sin signo (llave primaria) Auto-incremento
            $table->bigIncrements('id');
            //equivalente a un VARCHAR con longitud opcional
            $table->string('nombre', 50);
            //por defecto de laravel
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dificultads');
    }
}
