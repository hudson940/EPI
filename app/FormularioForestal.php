<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormularioForestal extends Model
{
    protected $table='formulario_forestales';
    protected $fillable=[ 'P1_cod_pred','P38_plantacion', 'P39_area_forestal', 'P40_Q_plantas',
     'P41_finalidad_fores', 'P42_productividad_f', ];   
   }
