<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'tbl_Docente';
    protected $primaryKey = 'DocenteId';
    protected $keyType = string;
    public $incrementing = false;

    protected $fillable = ['DocenteId','Titulo','TipoDocente','FechaIngreso','Estatus'];

    public function persona(){
        return $this->belongsTo('App\Persona','fkPersonaDocente','DocenteId');
    }

    public function docenteEspecialidad(){
        return $this->hasMany('App\DocenteEspecialidad','fkDocEsp','DocenteId');
    }

    public function trabajo(){
        return $this->hasMany('App\Trabajo','fkDocenteTrabajo','DocenteId');
    }
}
