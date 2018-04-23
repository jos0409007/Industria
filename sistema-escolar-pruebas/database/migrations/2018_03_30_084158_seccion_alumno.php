<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeccionAlumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_SeccionAlumno', function (Blueprint $table) {
            $table->string('SeccionAlumnoId',30)->primary();
            $table->string('AlumnoId',20);
            $table->string('AsignaturaSeccionId',10);
            $table->integer('Promedio');
            $table->enum('Estatus',['Aprobado','Reprobado','Abandono']);

            $table->timestamps();
            $table->foreign('AlumnoId')->references('AlumnoId')
                ->on('tbl_Alumno')->onDelete('cascade');
            $table->foreign('AsignaturaSeccionId')->references('AsignaturaSeccionId')
                ->on('tbl_AsignaturaSeccion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_SeccionAlumno');
    }
}
