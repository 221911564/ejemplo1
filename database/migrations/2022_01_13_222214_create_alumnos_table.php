<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255);
            $table->date('fn');
            $table->integer('matricula');
            $table->text('direccion');
            $table->string('genero');
            $table->text('email'); //Tamaño de la cadena, diferencia entre string.
            $table->string('pass',18);
            $table->text('foto');
            $table->integer('id_grupo');
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
        Schema::dropIfExists('tb_alumnos');
    }
}
