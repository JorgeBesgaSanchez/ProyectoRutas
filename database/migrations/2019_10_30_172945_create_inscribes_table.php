<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('inscriben');

        Schema::create('inscriben', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_actividad')->nullable()->unsigned();
            $table->bigInteger('id_usuario')->nullable()->unsigned();
            $table->dateTime('fecha_y_hora')->nullable();
            
            $table->timestamps();

            //claves foráneas
            $table->index(['id_actividad', 'id_usuario']);
            $table->foreign('id_actividad')->references('id')->on('actividades')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscribes');
    }
}
