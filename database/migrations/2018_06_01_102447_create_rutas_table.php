<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('inicio');
            $table->date('fin');
            $table->string('price1');
            $table->string('price2');
            $table->string('price3');
            $table->mediumText('description')->default('Descripción');
            $table->string('navcolor')->default('#000000');
            $table->string('textcolor')->default('#ffffff');
            $table->string('img')->default('/img/CasaBayarri.jpg');

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
        Schema::dropIfExists('rutas');
    }
}
