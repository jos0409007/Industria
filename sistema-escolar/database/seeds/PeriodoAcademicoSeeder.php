<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class PeriodoAcademicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

           $cont = 2018;
           $descripcion = "este es un periodo de prueba activo";
            \DB::table('tbl_PeriodoAcademico')->insert(array(
                'Descripcion' => $descripcion.' '.(string)$cont,  /*str_random(70)*/
                'Estatus' => 'Activo' /*$faker->randomElement(['Activo','Inactivo'])*/,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));

            $cont = $cont - 1;
            $descripcion = "este es un periodo de prueba inactivo";
            \DB::table('tbl_PeriodoAcademico')->insert(array(
                'Descripcion' => $descripcion.' '.(string)$cont,  /*str_random(70)*/
                'Estatus' => 'Inactivo' /*$faker->randomElement(['Activo','Inactivo'])*/,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));


    }
}
