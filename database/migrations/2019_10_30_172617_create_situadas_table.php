<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSituadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('situadas');
        
        Schema::create('situadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_provincia')->nullable()->unsigned();
            $table->bigInteger('id_zona')->nullable()->unsigned();
            $table->timestamps();

            //claves foráneas
            $table->index(['id_provincia', 'id_zona']);
            $table->foreign('id_provincia')->references('id')->on('provincias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_zona')->references('id')->on('zonas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('situadas');
    }
}
