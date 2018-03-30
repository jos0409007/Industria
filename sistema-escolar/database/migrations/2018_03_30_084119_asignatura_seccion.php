<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsignaturaSeccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_AsignaturaSeccion', function (Blueprint $table) {
            $table->string('AsignaturaSeccionId',10)->primary();
            $table->integer('CicloAsignaturaId')->unsigned();
            $table->integer('SeccionId')->unsigned();
            $table->integer('AulaId')->unsigned();
            $table->time('HoraInicio');
            $table->time('HoraFin');
            $table->string('DocenteAsignaturaId',10)->nullable();
            
            $table->timestamps();


            $table->foreign('CicloAsignaturaId')
                ->references('CicloAsignaturaId')
                ->on('tbl_CicloAsignatura')
                ->onDelete('cascade');

            $table->foreign('AulaId')->references('AulaId')->on('tbl_Aula')->onDelete('cascade');
            $table->foreign('SeccionId')->references('SeccionId')->on('tbl_Seccion')->onDelete('cascade');
            $table->foreign('DocenteAsignaturaId')->references('DocenteAsignaturaId')
                ->on('tbl_DocenteAsignatura')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_AsignaturaSeccion');
    }
}
