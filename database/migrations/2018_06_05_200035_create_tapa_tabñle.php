<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTapaTabñle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tapas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('bar');
            $table->string('ruta');
            $table->string('qr');
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
        Schema::drop('tapas');
    }
}
