<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePreguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('preguntas_generales', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('variable',20);
            $table->text('pregunta');
            $table->string('option',50);
            $table->text('html');
            $table->text('defecto');
            $table->string('class',200);
            $table->string('required',10);
            $table->string('placeholder',30);
            
              //
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('preguntas');
        
    }
}
