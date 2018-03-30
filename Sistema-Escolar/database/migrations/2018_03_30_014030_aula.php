<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_Aula', function (Blueprint $table) {
            $table->increments('AulaId');
            $table->integer('EdificioId')->unsigned();
            $table->timestamps();

            $table->foreign('EdificioId')->references('EdificioId')->on('tbl_Edificio')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_Aula');
    }
}
