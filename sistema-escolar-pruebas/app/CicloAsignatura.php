<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CicloAsignatura extends Model
{
    protected $table = 'tbl_CicloAsignatura';
    protected $primaryKey = 'CicloAsignaturaId';
    protected $fillable = ['AsignaturaCarreraId','CicloId'];

    public function ciclo(){
        return $this->belongsTo('App\CicloLectivo','fkCicloAsig','CicloId');
    }

    public function asignaturaCarrera(){
        return $this->belongsTo('App\AsignaturaCarrera','fkCicloAsig','AsignaturaCarreraId');
    }

    public function asignaturaSeccion(){
        return $this->hasMany('App\AsignaturaSeccion','fkAsignaturaCiclo','CicloAsignaturaId');
    }
}
