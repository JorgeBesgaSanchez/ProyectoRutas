<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('posts');

        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('texto');
            $table->bigInteger('id_usuario')->nullable()->unsigned();
            $table->bigInteger('id_ruta')->nullable()->unsigned();
            $table->dateTime('fecha_y_hora');
            $table->timestamps();

            //claves foráneas
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_ruta')->references('id')->on('rutas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
