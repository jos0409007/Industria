<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeccionAlumno extends Model
{
    protected $table = 'tbl_SeccionAlumno';

    protected $primaryKey = 'SeccionAlumnoId';
    protected $keyType = string;

    protected $fillable = ['SeccionAlumnoId','AlumnoId','AsignaturaSeccionId','Promedio','Estatus'];

    public function alumno(){
        return $this->belongsTo('App\Alumno','fkAlumnoSeccion','AlumnoId');
    }

    public function asignaturaSeccion(){
        return $this->belongsTo('App\AsignaturaSeccion','fkSeccionAlum','AsignaturaSeccionId');
    }

    public function seccionAlumParcial(){
        return $this->hasMany('App\SeccionAlumnoParcial','fkAlumParcial','SeccionAlumnoId');
    }
}
