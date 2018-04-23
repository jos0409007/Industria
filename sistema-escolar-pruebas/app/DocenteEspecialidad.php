<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocenteEspecialidad extends Model
{
    protected $table = 'tbl_DocenteEspecialidad';
    protected $primaryKey = 'DocenteEspecialidadId';
    protected $keyType = string;
    public $incrementing = false;

    protected $fillable = ['DocenteId','EspecialidadId'];

    public function docente(){
        return $this->belongsTo('App\Docente','fkDocEsp','DocenteId');
    }

    public function especialidad(){
        return $this->belongsTo('App\Especialidad','fkEspDoc','EspecialidadId');
    }

    public function docenteAsignatura(){
        return $this->hasMany('App\DocenteAsignatura','fkDocAsig','DocenteEspecialidadId');
    }
}
