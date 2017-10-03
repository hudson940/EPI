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
            $table->integer('P1_cod_pred');
            $table->string('P27_cultivo',50)->nullable();
            
            $table->decimal('P28_area_sembrada',10,2)->nullable();
            
            $table->integer('P29_tipo')->nullable();
            
            $table->decimal('P30_cant_cosech',10,2)->nullable();
            
            $table->decimal('P31_duracion',10,2)->nullable();
            
            $table->integer('P32_finalidad')->nullable();
            
            $table->decimal('P33_cant_autoC',10,2)->nullable();
            
            $table->decimal('P34_area_autoC',10,2)->nullable();
            
            $table->decimal('P35_productividad',10,2)->nullable();
            
            $table->string('P36_tipo_semilla',90)->nullable();
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
