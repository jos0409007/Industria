<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CicloLectivo extends Model
{
    protected $table = 'tbl_CicloLectivo';

    protected $primaryKey = 'CicloId';

    protected $fillable = ['PeriodoId','Descripcion','TipoPeriodo','FechaInicio', 'FechaFin', 'CicloEstatus'];

    public function periodoAcademico(){

        return $this->belongsTo('App\PeriodoAcademico','fkPeriodoCiclo','PeriodoId');
    }

    public function parcial(){
        return $this->hasMany('App\Parcial','fkCicloParcial','CicloId');
    }

    public function cicloAsignatura(){
        return $this->hasMany('App\CicloAsignatura','fkCicloAsig','CicloId');
    }


}
