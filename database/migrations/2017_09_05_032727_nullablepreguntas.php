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
        Schema::table('preguntas_generales', function (Blueprint $table) {
            
            
            
             
             $table->text('html')->nullable(false)->change();
             $table->text('defecto')->nullable(false)->change();
             $table->string('required',10)->nullable(flase)->change();
             $table->string('placeholder',30)->nullable(flase)->change();
             
               
         });

       
    }
}
