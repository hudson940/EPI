<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table='preguntas_generales';
    protected $fillable=['id','variable','pregunta','option','html','default','class','required','placheholder'];
    public $timestamps= false;
}
