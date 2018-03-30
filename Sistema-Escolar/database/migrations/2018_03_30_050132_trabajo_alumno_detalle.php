<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrabajoAlumnoDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_TrabajoAlumnoDetalle', function (Blueprint $table) {
            $table->string('SeccionAlumParcialId',40);
            $table->string('TrabajoAsigId',10);
            $table->integer('nota')->nullable();
            $table->string('Observaciones',200)->nullable();
            $table->date('FechaEntrega')->nullable();
            $table->timestamps();

           // $table->primary(['SeccionAlumParcialId','TrabajoAsigId']);
          //  $table->foreign('SeccionAlumParcialId')->references('SeccionAlumParcialId')
           //     ->on('tbl_SeccionAlumParcial')->onDelete('cascade');
         //  $table->foreign('TrabajoAsigId')->references('TrabajoAsigId')
         //  ->on('tbl_TrabajoAsignaturaSeccion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_TrabajoAlumnoDetalle');
    }
}
