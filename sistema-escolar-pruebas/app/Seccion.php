<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    protected $table = 'tbl_Seccion';
    protected $primaryKey = 'SeccionId';
    protected $fillable = ['Nombre'];

    public function asignaturaSeccion(){
        return $this->hasMany('App\AsignaturaSeccion','fkSeccionAsig','SeccionId');
    }
}
