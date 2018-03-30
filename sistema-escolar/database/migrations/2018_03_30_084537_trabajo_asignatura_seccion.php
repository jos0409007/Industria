<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrabajoAsignaturaSeccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_TrabajoAsignaturaSeccion', function (Blueprint $table) {
            $table->string('TrabajoAsigId',10)->primary();
            $table->integer('TrabajoId')->unsigned();
            $table->string('AsignaturaSeccionId',10);
            $table->timestamps();

            $table->foreign('TrabajoId')->references('TrabajoId')->on('tbl_Trabajo')->onDelte('cascade');
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
        Schema::dropIfExists('tbl_TrabajoAsignaturaSeccion');
    }
}
