<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cultivo extends Model
{
   protected $table='cultivos';
   protected $fillable=['cod_cultivo','Cultivo_plantacion'];
   public $timestamps=false;
}
