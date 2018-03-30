<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Persona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_Persona', function (Blueprint $table) {
            $table->string('PersonaId',20)->primary();
            $table->string('Nombres',50);
            $table->string('Apellidos',50);
            $table->char('Sexo',1);
            $table->date('FechaNacimiento')->nullable();
            $table->integer('Edad')->nullable();
            $table->string('CorreoElectronico',20)->nullable();
            $table->string('telefono',15)->nullable();
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
        Schema::dropIfExists('tbl_Persona');
    }
}
