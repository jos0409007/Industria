<?php

use Illuminate\Database\Seeder;
use App\CicloLectivo;
use Faker\Factory as Faker;


class ParcialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = Faer::create();
        $ciclos = CicloLectivo::get();

        foreach($ciclos as $cicloLectivo){

            \DB::table('tbl_Parcial')->insert(array(
                'CicloId' => $cicloLectivo->CicloId,
                'Descripcion' => str_random('80'),
                'FechaInicio' => $faker->dateTimeBetween($startDate = $cicloLectivo->FechaInicio, $endDate = 'now'),
                'FechaFin' => $faker->dateTimeBetween($startDate = $cicloLectivo->FechaInicio, $endDate = 'now')

            ));

        }

    }
}
