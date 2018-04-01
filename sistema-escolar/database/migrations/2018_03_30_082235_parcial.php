<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Parcial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_Parcial', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ParcialId');
            $table->integer('CicloId')->unsigned();
            $table->string('Descripcion',100);
            $table->date('FechaInicio');
            $table->date('FechaFin');
            $table->enum('Estatus',['Activo','Inactivo']);

            $table->timestamps();

            $table->foreign('CicloId')
                ->references('CicloId')
                ->on('tbl_CicloLectivo')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_Parcial');
    }
}
