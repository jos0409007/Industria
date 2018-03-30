<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CicloLectivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_CicloLectivo', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('CicloId');
            $table->integer('PeriodoId')->unsigned();
            $table->string('Descripcion',100);
            $table->string('TipoPeriodo',40);
            $table->date('FechaInicio');
            $table->date('FechaFin');
            $table->string('CicloEstatus',40);


            $table->foreign('PeriodoId')->references('PeriodoId')->on('tbl_PeriodoAcademico');
            
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_CicloLectivo');
    }
}
