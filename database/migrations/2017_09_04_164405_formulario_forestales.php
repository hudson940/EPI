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
            $table->float('39-area_forestal',4,2);
            $table->float('40-Q_plantas',4,2);
            $table->enum('41-finalidad_fores',['venta','auto-consumo']);
            $table->float('42-productividad_f',4,2);
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
