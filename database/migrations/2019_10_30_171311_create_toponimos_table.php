<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToponimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //Schema::dropIfExists('toponimos');

        Schema::create('toponimos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->bigInteger('id_provincia')->nullable()->unsigned();
            $table->timestamps();

            //claves foráneas
            $table->foreign('id_provincia')->references('id')->on('provincias')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toponimos');
    }
}
