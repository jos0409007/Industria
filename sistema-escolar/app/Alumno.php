<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'tbl_Alumno';
    protected $primaryKey = 'AlumnoId';
    protected $keyType = string;
    public $incrementing = false;

    protected $fillable = ['AlumnoId','Beca','PorcentajeBeca','TutorId','CarreraId','Estatus'];

    public function persona(){
        return $this->belongsTo('App\Persona','fkPersonaAlumno','AlumnoId');
    }

    public function tutor(){
        return $this->belongsTo('App\Persona','fkPersonaTutor','TutorId');
    }

    public function carrera(){
        return $this->belongsTo('App\Carrera','fkCarreraAlumno','CarreraId');
    }

    public function seccionAlumno(){
        return $this->hasMany('App\SeccionAlumno','fkAlumnoSeccion','AlumnoId');
    }
}
