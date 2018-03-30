<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsignaturaCarrera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_AsignaturaCarrera', function (Blueprint $table) {
            $table->string('AsignaturaCarreraId',10)->primary()->unique();
            $table->integer('AsignaturaId')->unsigned();
            $table->integer('CarreraId')->unsigned();
            $table->timestamps();

            $table->foreign('AsignaturaId')->references('AsignaturaId')->on('tbl_Asignatura')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_AsignaturaCarrera');
    }
}
