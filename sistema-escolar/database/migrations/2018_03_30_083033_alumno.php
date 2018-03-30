<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_Alumno', function (Blueprint $table) {
            $table->string('AlumnoId',20)->primary();
            $table->char('Beca',2);
            $table->decimal('ProcentajeBeca',8,2)->nullable();
            $table->string('TutorId',20)->nullable(); //si un alumno tiene un tutor dentro de la institucion, ambas hacen referencia a la tabla persona
            $table->integer('CarreraId')->unsigned();
            $table->string('Estatus',20);
            $table->timestamps();

            $table->foreign('AlumnoId')->references('PersonaId')->on('tbl_persona')->onDelete('cascade');
            $table->foreign('TutorId')->references('PersonaId')->on('tbl_persona')->onDelete('cascade');
            $table->foreign('CarreraId')->references('CarreraId')->on('tbl_Carrera')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_Alumno');
    }
}
