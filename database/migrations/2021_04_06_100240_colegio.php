<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Colegio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegio', function (Blueprint $table) {
            $table->id('idColegio');
            $table->foreignId('idMunicipio')->constrained('municipio');
            $table->string('denomGenerica');
            $table->string('denomEspesifica');
            $table->string('naturaleza');
            $table->string('direccion');
            $table->integer('telefono')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colegio');
    }
}
