<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'tbl_Especialidad';

    protected $primaryKey = 'EspecialidadId';
    protected $fillable = ['Nombre'];

    public function asignatura(){
        return $this->hasMany('App\Asignatura','fkEspeAsig','EspecialidadId');
    }

    public function docenteEspecialidad(){
        return $this->hasMany('App\DocenteEspecialidad','fkEspDoc','EspecialidadId');
        
    }
}
