<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignaturaSeccion extends Model
{
    protected $table = 'tbl_AsignaturaSeccion';
    protected $primaryKey = 'AsignaturaSeccionId';
    protected $keyType = string;
    //public $incrementing = false;

    protected $fillable = ['AsignaturaSeccionId','CicloAsignaturaId','SeccionId','AulaId','HoraInicio','HoraFin','DocenteAsignaturaId'];

    public function cicloAsignatura(){
        return $this->belongsTo('App\CicloAsignatura','fkAsignaturaCiclo','CicloAsignaturaId');
    }

    public function seccion(){
        return $this->belongsTo('App\Seccion','fkSeccionAsig','SeccionId');
    }

    public function aula(){
        return $this->belongsTo('App\Aula','fkAulaSig','AulaId');
    }

    public function DocenteAsignatura(){
        return $this->belongsTo('App\DocenteAsignatura','fkDocenteSeccion','DocenteAsignaturaId');
    }

    public function seccionAlumno(){
        return $this->hasMany('App\SeccionAlumno','fkSeccionAlum','AsignaturaSeccionId');
    }

    public function trabajoAsignaturaSeccion(){
        return $this->hasMany('App\TrabajoAsignaturaSeccion','fkAsignaturaTrabajo','AsignaturaSeccionId');
    }
    
}
