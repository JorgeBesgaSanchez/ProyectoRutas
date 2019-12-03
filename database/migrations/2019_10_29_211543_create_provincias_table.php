<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('provincias');

        Schema::create('provincias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_provincia');
            $table->string('nombre');
            $table->bigInteger('id_comunidad')->nullable()->unsigned();;
            $table->timestamps();

            //claves foráneas
            $table->foreign('id_comunidad')->references('id')->on('comunidades')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provincias');
    }
}
