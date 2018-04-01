<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeccionAlumParcial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_SeccionAlumParcial', function (Blueprint $table) {
            $table->string('SeccionAlumParcialId',40)->primary();
            $table->string('SeccionAlumnoId',30);
            $table->integer('ParcialId')->unsigned();
            $table->integer('NotaTrabajo');
            $table->integer('NotaExamen');
            $table->integer('NotaTotal');
            $table->enum('Estatus',['Aprobado','Reprobado']);
            $table->timestamps();

            $table->foreign('ParcialId')->references('ParcialId')->on('tbl_Parcial')->onDelete('cascade');
            $table->foreign('SeccionAlumnoId')->references('SeccionAlumnoId')
                ->on('tbl_SeccionAlumno')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_SeccionAlumParcial');
    }
}
