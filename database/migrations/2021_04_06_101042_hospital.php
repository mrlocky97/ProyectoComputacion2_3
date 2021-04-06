<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hospital extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital', function (Blueprint $table) {
            $table->id('idHospital');
            $table->foreignId('idMunicipio')->constrained('municipio');
            $table->string('correo');
            $table->integer('telefono')->unsigned();
            $table->string('direccion');
            $table->string('nombre');
            $table->string('claseCentro', 1000);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital');
    }
}
