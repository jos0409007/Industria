<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'tbl_Persona';

    protected $primaryKey = 'PersonaId';
    protected $keyType = string;
    public $incrementing = false;

    protected $fillable = ['PersonaId','Nombres','Apellido','Sexo','FechaNacimiento','Edad','CorreoElectronico','telefono'];

    public function alumno(){
        return $this->hasOne('App\Alumno','fkPersonaAlumno','PersonaId');
    }

    public function tutor(){
        return $this->hasMany('App\Alumno','fkPersonaTutor','PersonaId');
    }

    public function docente(){
        return $this->hasOne('App\Docente','fkPersonaDocente','PersonaId');
    }
}
