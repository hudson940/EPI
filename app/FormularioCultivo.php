<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormularioCultivo extends Model
{   protected $table='formulario_cultivos';
    protected $fillable=[ 'cod_predio','27-cultivo', '28-area_sembrada', '29-tipo', '30-cant_cosech', '31-duracion', '32-finalidad', '33-cant_autoC', '34-area_autoC', '35-productividad', '36-tipo_semilla' ];
}
