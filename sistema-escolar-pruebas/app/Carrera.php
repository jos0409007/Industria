<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'tbl_Carrera';

    protected $primaryKey = 'CarreraId';
    protected $fillable = ['Nombre','Descripcion'];

    public function asignaturaCarrera(){
        return $this->hasMany('App\AsignaturaCarrera','fkCarrAsig','CarreraId');
    }

    public function alumno(){
        return $this->hasMany('App\Alumno','fkCarreraAlumno','CarreraId');
    }
}
