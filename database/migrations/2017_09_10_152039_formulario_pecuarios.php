<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormularioPecuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_pecuarios', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('cod_predio')->index();
            $table->string('54-otro-pecuario',90)->nullable();
            
            $table->integer('55-act-pecuaria')->nullable();
            
            $table->decimal('56-Area-op',10,2)->nullable();
            
            $table->integer('57-machos')->nullable();
            
            $table->integer('57-1-hembras-op')->nullable();
            
            $table->integer('58-final-op')->nullable();
            
            $table->decimal('59-duracion-op',10,2)->nullable();
            $table->rememberToken();
            $table->timestamps();
            } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('formulario_pecuarios');
        
    }
}
