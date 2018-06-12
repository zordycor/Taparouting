<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->integer('ruta_id')->unsigned();
            $table->foreign('ruta_id')->references('id')->on('rutas');
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
        Schema::dropIfExists('bar');
    }
}
