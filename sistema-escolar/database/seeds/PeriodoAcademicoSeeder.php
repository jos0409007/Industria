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

        for ($i = 0; $i < 10; $i++){
           
            \DB::table('tbl_Periodoacademico')->insert(array(
                'Descripcion' => str_random(70),
                'Estatus' => $faker->randomElement(['Activo','Inactivo']),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        
        }

    }
}
