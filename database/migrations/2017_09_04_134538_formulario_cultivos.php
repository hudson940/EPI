<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormularioCultivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_cultivos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cod_predio')->index();
            $table->string('27-cultivo',60)->unique();
            $table->float('28-area_sembrada',4,2);
            $table->enum('29-tipo',['transitorio','permanente']);
            $table->float('30-cant_cosech',4,2);
            $table->float('31-duracion',4,2);
            $table->enum('32-finalidad',['venta','auto-consumo']);
            $table->float('33-cant_autoC',4,2);
            $table->float('34-area_autoC',4,2);
            $table->float('35-productividad',8,2);
            $table->enum('36-tipo_semilla',['certificada','no-certificada','tradicional','no-sabe']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulario_cultivos');
    }
}
