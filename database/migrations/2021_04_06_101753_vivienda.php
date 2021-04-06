<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vivienda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vivienda', function (Blueprint $table) {
            $table->id('idVivienda');
            $table->foreignId('idMunicipio')->constrained('municipio');
            $table->float('precion')->unsigned();
            $table->integer('nHabitaciones')->unsigned();
            $table->float('tamano')->unsigned();
            $table->integer('nBanos')->unsigned();
            $table->string('descripcion', 1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vivienda');
    }
}
