<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    protected $table = 'tbl_Edificio';
    protected $primaryKey = 'EdificioId';

    protected $fillable = ['Nombre','Descripcion'];

    public function aula(){
        return $this->hasMany('App\Aula','fkEdificioAula','EdificioId');
    }   
}
