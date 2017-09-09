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
            $table->decimal('28-area_sembrada',10,2)->nullable();
            
            $table->integer('29-tipo')->nullable();
            
            $table->decimal('30-cant_cosech',10,2)->nullable();
            
            $table->decimal('31-duracion',10,2)->nullable();
            
            $table->integer('32-finalidad')->nullable();
            
            $table->decimal('33-cant_autoC',10,2)->nullable();
            
            $table->decimal('34-area_autoC',10,2)->nullable();
            
            $table->decimal('35-productividad',10,2)->nullable();
            
            $table->string('36-tipo_semilla',90)->nullable();
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
