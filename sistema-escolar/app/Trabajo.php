<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajo extends Model
{
    protected $table = 'tbl_Trabajo';
    protected $primaryKey = 'TrabajoId';

    protected $fillable = ['DocenteId','Nombre','Descripcion','ParcialId','FechaInicio','FechaFin','Valor','TipoTrabajo'];

    public function docente(){
        return $this->belongsTo('App\Docente','fkDocenteTrabajo','DocenteID');
    }

    
    public function parcial(){
        return $this->belongsTo('App\Parcial','fkParcialTrabajo','ParcialId');
    }
    

    public function trabajoAsignaturaSeccion(){
        return $this->hasMany('App\TrabajoAsignaturaSeccion','fkTrabajoAsignatura','TrabajoId');
    }
}
