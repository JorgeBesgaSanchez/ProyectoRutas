<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoMarchasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('tipo_marchas');

        Schema::create('tipo_marchas', function (Blueprint $table) {
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
        Schema::dropIfExists('tipo_marchas');
    }
}
