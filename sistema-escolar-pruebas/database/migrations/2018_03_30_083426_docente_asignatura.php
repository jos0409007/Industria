<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocenteAsignatura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_DocenteAsignatura', function (Blueprint $table) {
            $table->string('DocenteAsignaturaId',10)->primary();
            $table->string('DocenteEspecialidadId',10);
            $table->integer('AsignaturaId')->unsigned();
            $table->timestamps();


            $table->foreign('DocenteEspecialidadId')->references('DocenteEspecialidadId')->on('tbl_DocenteEspecialidad')->onDelete('cascade');
            $table->foreign('AsignaturaId')->references('AsignaturaId')->on('tbl_Asignatura')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_DocenteAsignatura');
    }
}
