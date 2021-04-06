<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Municipio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipio', function (Blueprint $table) {
            $table->id('idMunicipio');
            $table->foreignId('idProvincia')->constrained('provincia');
            $table->float('longitud');
            $table->float('latitud');
            $table->integer('codPostal')->unsigned();// el unsigned es para que sean solo positivos
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipio');
    }
}
