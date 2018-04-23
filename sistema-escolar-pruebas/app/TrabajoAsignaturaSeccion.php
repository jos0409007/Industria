<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabajoAsignaturaSeccion extends Model
{
    protected $table = 'tbl_TrabajoAsignaturaSeccion';
    protected $primaryKey = 'TrabajoAsigId';
    protected $keyType = string;

    protected $fillable = ['TrabajoAsigId','TrabajoId','AsignaturaSeccionId'];

    public function trabajo(){
        return $this->belongsTo('App\Trabajo','fkTrabajoAsignatura','TrabajoId');
    }

    public function asignaturaSeccion(){
        return $this->belongsTo('App\AsignaturaSeccion','fkAsignaturaTrabajo','AsignaturaSeccionId');
    }
/*
    public function trabajoAlumnoDetalle(){
        return $this->hasMany('App\TrabajoAlumnoDetalle','fkTrabajoAlumno','TrabajoAsigId');
    }
    */
}
