<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteAsignatura extends Model
{
    protected $table = 'tbl_DocenteAsignatura';
    protected $primaryKey = 'DocenteAsignaturaId';
    protected $keyType = string;
    public $incrementing = false;

    protected $fillable = ['DocenteAsignaturaId','DocenteEspecialidadId','AsignaturaId'];

    public function docenteEspecialidad(){
        return $this->belongsTo('App\DocenteEspecialidad','fkDocAsig','DocenteEspecialidadId');
    }

    public function asignatura(){
        return $this->belongsTo('App\Asignatura','fkAsigDoc','AsignaturaId');
    }


}
