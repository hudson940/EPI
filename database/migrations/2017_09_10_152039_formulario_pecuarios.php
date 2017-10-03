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
            $table->string('P54_otro_pecuario',90)->nullable();
            
            $table->integer('P55_act_pecuaria')->nullable();
            
            $table->decimal('P56_Area_op',10,2)->nullable();
            
            $table->integer('P57_machos')->nullable();
            
            $table->integer('P57_1_hembras_op')->nullable();
            
            $table->integer('P58_final_op')->nullable();
            
            $table->decimal('P59_duracion_op',10,2)->nullable();
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
