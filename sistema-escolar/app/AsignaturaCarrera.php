<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignaturaCarrera extends Model
{
    protected $table = 'tbl_AsignaturaCarrera';

    protected $primaryKey = 'AsignaturaCarreraId';
    //public $incrementing = false;
   // protected $keyType = string;

    protected $fillable = ['AsignaturaCarreraId','AsignaturaId','CarreraId'];

    public function carrera(){
        return $this->belognsTo('App\Carrera','fkCarrAsig','CarreraId');
    }

    public function asignatura(){
        return $this->belongsTo('App\Asignatura','fkAsigCarr','AsignaturaId');
    }

    public function cicloAsignatura(){
        return $this->hasMany('App\CicloAsignatura','fkCicloAsig','AsignaturaCarreraId');
    }
}
