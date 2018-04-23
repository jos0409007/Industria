<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PeriodoAcademico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_PeriodoAcademico', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('PeriodoId');
            $table->string('Descripcion',100);
            $table->enum('Estatus',['Activo','Inactivo']);
            $table->timestamps();

            $table->unique('PeriodoId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_PeriodoAcademico');
    }
}
