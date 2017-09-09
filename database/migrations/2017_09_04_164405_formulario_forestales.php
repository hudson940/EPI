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
            $table->integer('cod_predio')->index();
            $table->string('38-plantacion',60)->unique();
            $table->decimal('39-area_forestal',10,2);
            $table->integer('40-Q_plantas');
            $table->string('41-finalidad_fores',20);
            $table->decimal('42-productividad_f',8,2)->nullable();
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
