<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('usuarios');

        Schema::create('usuarios', function (Blueprint $table) {
            //equivalente a un BIGINT sin signo (llave primaria) Auto-incremento
            $table->bigIncrements('id');
            //equivalente a un VARCHAR con longitud opcional
            $table->string('nombre', 50);
            ////equivalente a un VARCHAR con longitud opcional
            $table->string('email')->unique; //no puede haber dos email iguales
            //equivalente a un VARCHAR con longitud opcional
            $table->string('contraseña');
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
        Schema::dropIfExists('usuarios');
    }
}
