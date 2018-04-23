<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\PeriodoAcademico;

class CicloLectivoSeeder extends Seeder
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
        $periodos = PeriodoAcademico::get();

        foreach ($periodos as $periodoAcademico){

            \DB::table('tbl_CicloLectivo')->insert(array(
                'PeriodoId' => $periodoAcademico->PeriodoId,
                'Descripcion' => str_random(90),
                'TipoPeriodo' => $faker->randomElement(['Semestral','Trimestral']),
                'FechaInicio' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
                'FechaFin' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now'),
                'Estatus' => $faker->randomElement(['Activo','Inactivo'])
            ));

        }
      


    }
}
