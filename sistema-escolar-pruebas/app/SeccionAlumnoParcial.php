<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeccionAlumnoParcial extends Model
{
    protected $table = 'tbl_SeccionAlumParcial';
    protected $primaryKey = 'SeccionAlumParcialId';
    protected $keyType = string;

    protected $fillable = ['SeccionAlumParcialId','SeccionAlumnoId','ParcialId','NotaTrabajo','NotaExamen','NotaTotal','Estatus'];

    public function seccionAlumno(){
        return $this->belongsTo('App\SeccionAlumno','fkAlumParcial','SeccionAlumnoId');
    }

    public function parcial(){
        return $this->belongsTo('App\Parcial','fkParcialSeccion','ParcialId');
    }
/*
    public function trabajoAlumnoDetalle(){
        return $this->hasMany('App\TrabajoAlumnoDetalle','fkAlumTrabajo','SeccionAlumParcialId');
    }
    */
}
