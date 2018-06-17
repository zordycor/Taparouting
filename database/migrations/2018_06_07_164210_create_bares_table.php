<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('direccion');
            $table->string('horarios');
            $table->string('horarios');
            $table->string('telefono');
            $table->string('tapadesc');
            $table->string('tapaimg');
            $table->integer('ruta_id')->unsigned()->nullable();
            $table->foreign('ruta_id')->references('id')->on('rutas');
            $table->boolean('aceptado');
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
        Schema::dropIfExists('bares');
    }
}
