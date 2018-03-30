<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Asignatura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_Asignatura', function (Blueprint $table) {
            $table->engine = 'InnoDb';
            $table->increments('AsignaturaId');
            $table->string('Nombre',50);
            $table->integer('EspecialidadId')->unsigned();
            $table->integer('UnidadValorativa');
            $table->timestamps();

            $table->foreign('EspecialidadId')
                ->references('EspecialidadId')
                ->on('tbl_Especialidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_Asignatura');
    }
}
