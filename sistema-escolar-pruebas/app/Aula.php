<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table = 'tbl_Aula';
    protected $primaryKey = 'AulaId';
    protected $fillable = ['EdificioId'];

    public function edificio(){
        return $this->belongsTo('App\Edificio','fkEdificioAula','EdificioId');
    }

    public function asignaturaSeccion(){
        return $this->hasMany('App\AsignaturaSeccion','fkAulaAsig','AulaId');
    }
}
