<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Docente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_docente', function (Blueprint $table) {
            $table->string('DocenteId',20)->primary();
            $table->string('Titulo',50);
            $table->string('TipoDocente',20); //recordar que es para definir si es de piso o es por hora
            $table->date('FechaIngreso');
            $table->string('Estatus');
            $table->timestamps();

            $table->foreign('DocenteId')->references('PersonaId')->on('tbl_persona')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_docente');
    }
}
