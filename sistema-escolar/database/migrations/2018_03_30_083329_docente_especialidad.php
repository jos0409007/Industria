<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocenteEspecialidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_DocenteEspecialidad', function (Blueprint $table) {
            $table->string('DocenteEspecialidadId',10)->primary();
            $table->string('DocenteId',20);
            $table->integer('EspecialidadId')->unsigned();
            $table->timestamps();

            $table->foreign('DocenteId')->references('DocenteId')->on('tbl_docente')->onDelete('cascade');
            $table->foreign('EspecialidadId')->references('EspecialidadId')->on('tbl_Especialidad')->onDelte('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_DocenteEspecialidad');
    }
}
