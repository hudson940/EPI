<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nullablepreguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('preguntas_generales', function (Blueprint $table) {
           
           
           
            
            $table->text('html')->nullable()->change();
            $table->text('defecto')->nullable()->change();
            $table->string('required',10)->nullable()->change();
            $table->string('placeholder',30)->nullable()->change();
            
              
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
       
    }
}
