<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CicloAsignatura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_CicloAsignatura', function (Blueprint $table) {
            $table->increments('CicloAsignaturaId');
            $table->string('AsignaturaCarreraId',10);
            $table->integer('CicloId')->unsigned();
            $table->timestamps();

            $table->foreign('AsignaturaCarreraId')->references('AsignaturaCarreraId')->on('tbl_AsignaturaCarrera')->onDelete('cascade');
            $table->foreign('CicloId')->references('CicloId')->on('tbl_CicloLectivo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_CicloAsignatura');
    }
}
