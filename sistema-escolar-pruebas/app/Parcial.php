<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcial extends Model
{
    protected $table = 'tbl_Parcial';
    protected $primaryKey = 'ParcialId';

    protected $fillable = ['CicloId','Descripcion','FechaInicio','FechaFin','Estatus'];

    public function cicloLectivo(){
        return $this->belongsTo('App\CicloLectivo','fkCicloParcial','CicloId');
    }

    public function seccionAlumParcial(){
        return $this->hasMany('App\SeccionAlumnoParcial','fkParcicalSeccion','ParcialId');
    }

    public function trabajo(){
        return $this->hasMany('App\Trabajo','fkParcialTrabajo','ParcialId');
    }
}
