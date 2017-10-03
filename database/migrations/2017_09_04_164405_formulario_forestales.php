<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormularioForestales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_forestales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('P1_cod_pred');
            $table->string('P38_plantacion',90)->nullable();
            
            $table->decimal('P39_area_forestal',10,2)->nullable();
            
            $table->integer('P40_Q_plantas')->nullable();
            
            $table->integer('P41_finalidad_fores')->nullable();
            
            $table->decimal('P42_productividad_f',10,2)->nullable();
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
        Schema::dropIfExists('formulario_forestales');
    }
}
