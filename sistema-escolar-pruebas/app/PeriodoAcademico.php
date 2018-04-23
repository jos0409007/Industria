<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeriodoAcademico extends Model
{
    protected $table = 'tbl_periodoacademico';
    protected $primaryKey = 'PeriodoId';

    protected $fillable = ['Descripcion', 'Estatus'];

    public function cicloLectivo(){

        return $this->hasMany('App\CicloLectivo','fkPeriodoCiclo','PeriodoId');

    }

}
