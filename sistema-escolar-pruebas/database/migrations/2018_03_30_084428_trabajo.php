<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trabajo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_Trabajo', function (Blueprint $table) {
            $table->increments('TrabajoId');
            $table->string('DocenteId',20);
            $table->string('Nombre',50);
            $table->string('Descripcion',999);
            $table->integer('ParcialId')->unsigned();
            $table->date('FechaInicio');
            $table->date('FechaFin');
            $table->integer('Valor');
            $table->enum('TipoTrabajo',['Investigacion','Tarea','Proyecto','Otro']); //investigacion, proyecto, tarea... etc
            $table->timestamps();

            $table->foreign('DocenteId',20)->references('DocenteId')
                ->on('tbl_Docente')->onDelete('cascade');

            $table->foreign('ParcialId')->references('ParcialId')->on('tbl_Parcial');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_Trabajo');
    }
}
