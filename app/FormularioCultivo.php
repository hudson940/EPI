<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormularioCultivo extends Model
{   protected $table='formulario_cultivos';
    public $fillable=[ 'P1_cod_pred','P27_cultivo', 'P28_area_sembrada', 'P29_tipo', 'P30_cant_cosech', 'P31_duracion', 'P32_finalidad', 'P33_cant_autoC', 'P34_area_autoC', 'P35_productividad', 'P36_tipo_semilla', ];
}
