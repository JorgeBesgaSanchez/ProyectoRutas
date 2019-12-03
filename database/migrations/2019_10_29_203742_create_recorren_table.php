<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecorrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recorren', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_ruta')->nullable()->unsigned();
            $table->bigInteger('id_camino')->nullable()->unsigned();

            $table->timestamps();

            //claves foráneas
            $table->index(['id_ruta', 'id_camino']);
            $table->foreign('id_ruta')->references('id')->on('rutas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_camino')->references('id')->on('tipo_caminos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recorren');
    }
}
