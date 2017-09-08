<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormularioForestal extends Model
{
    protected $table='formulario_forestales';
    protected $fillable=['cod_predio','38-plantacion','39-area_forestal','40-Q_plantas','41-finalidad_fores','42-productividad_f'];
}
