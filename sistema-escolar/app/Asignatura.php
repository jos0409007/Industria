<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'tbl_Asignatura';

    protected $primaryKey = 'AsignaturaId';
    protected $fillable = ['Nombre','EspecialidadId','UnidadValorativa'];

    public function especialidad(){
        return $this->belongsTo('App\Especialidad','fkEspeAsig','EspecialidadId');
    }

    public function asignaturaCarrera(){
        return $this->hasMany('App\AsignaturaCarrera','fkAsigCarr','AsignaturaId');
    }

    public function docenteAsignatura(){
        return $this->hasMany('App\DocenteAsignatura','fkAsigDoc','AsignaturaId');
    }

}
