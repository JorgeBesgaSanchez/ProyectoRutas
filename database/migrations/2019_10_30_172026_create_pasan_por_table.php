<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasanPorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('pasan_por');

        Schema::create('pasan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_ruta')->nullable()->unsigned();
            $table->bigInteger('id_toponimo')->nullable()->unsigned();
            $table->timestamps();

            //claves foráneas
            $table->index(['id_ruta', 'id_toponimo']);
            $table->foreign('id_ruta')->references('id')->on('rutas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_toponimo')->references('id')->on('toponimos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasa_pors');
    }
}
