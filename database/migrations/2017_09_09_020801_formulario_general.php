<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FormularioGeneral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_generales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('coordenadas',90)->nullable();
            
            $table->integer('1-cod_pred')->nullable();
            
            $table->string('2-nom_vereda',90)->nullable();
            
            $table->string('3-nom_predio',90)->nullable();
            
            $table->integer('4-c_adp')->nullable();
            
            $table->string('5-nom_ape',90)->nullable();
            
            $table->integer('6-num_tel')->nullable();
            
            $table->integer('7-rel_act')->nullable();
            
            $table->integer('8-p_act-agr')->nullable();
            
            $table->integer('9-p_act-pec')->nullable();
            
            $table->integer('10-p_act-noap')->nullable();
            
            $table->integer('11-e_bos_fores')->nullable();
            
            $table->integer('12-e_past_rast')->nullable();
            
            $table->integer('13-e_prot_conser')->nullable();
            
            $table->integer('14-e_otros_usos')->nullable();
            
            $table->integer('15-C_tenencia')->nullable();
            
            $table->integer('16-doc-legal')->nullable();
            
            $table->decimal('17-areaTotal',10,2)->nullable();
            
            $table->decimal('18-area-AAG',10,2)->nullable();
            
            $table->decimal('19-area-APE',10,2)->nullable();
            
            $table->decimal('19-area-APfores',10,2)->nullable();
            
            $table->decimal('21-area-Bosq',10,2)->nullable();
            
            $table->decimal('22-area-pasto',10,2)->nullable();
            
            $table->decimal('23_area_ANA',10,2)->nullable();
            
            $table->decimal('24_area_proteccion',10,2)->nullable();
            
            $table->decimal('25_area_construida',10,2)->nullable();
            
            $table->integer('43-maq-agri')->nullable();
            
            $table->decimal('44_area_cons-AA',10,2)->nullable();
            
            $table->decimal('45_ins_ext',10,2)->nullable();
            
            $table->integer('46_gan_bov')->nullable();
            
            $table->integer('47-alim-bovino')->nullable();
            
            $table->decimal('48-area-bovina',10,2)->nullable();
            
            $table->integer('49-bov-machos')->nullable();
            
            $table->integer('49-bov-hembras')->nullable();
            
            $table->integer('50-orient-bov')->nullable();
            
            $table->decimal('51-cant-leche',10,2)->nullable();
            
            $table->integer('52-finalidad-bov')->nullable();
            
            $table->decimal('53-cant-lech-auto',10,2)->nullable();
            
            $table->decimal('60_area_cons-AP',10,2)->nullable();
            
            $table->string('61_can_com',90)->nullable();
            
            $table->string('62_mejor_suelo',90)->nullable();
            
            $table->string('63_cont_enf',90)->nullable();
            
            $table->string('64_fuen_agua',90)->nullable();
            
            $table->string('65_desechos',90)->nullable();
            
            $table->string('66_trato_desechos',90)->nullable();
            
            $table->string('67_trans_tala',90)->nullable();
            
            $table->integer('68_prote_fuen_nat')->nullable();
            
            $table->string('69_proteccion_agua',90)->nullable();
            
            $table->integer('70_prod_bos_par')->nullable();
            
            $table->integer('71_cob_veg')->nullable();
            
            $table->integer('72_pendiente')->nullable();
            
            $table->integer('73_orient_surcos')->nullable();
            
            $table->integer('74_rot_cultivos')->nullable();
            
            $table->integer('75_act_sostenible')->nullable();
            
            $table->string('76_act_no-agro',90)->nullable();
            
            $table->integer('77_traba_perm_AA')->nullable();
            
            $table->integer('78_trab_hog_prod_AA')->nullable();
            
            $table->integer('79_trab_hog_asalar')->nullable();
            
            $table->integer('80_jorn_AA')->nullable();
            
            $table->decimal('81_horas_AA',10,2)->nullable();
            
            $table->integer('82_trab_perma_ANA')->nullable();
            
            $table->integer('83_trab_hog_prod_ANA')->nullable();
            
            $table->integer('84_asal_ANA')->nullable();
            
            $table->integer('85_jornal_ANA')->nullable();
            
            $table->decimal('86_horas_ANA',10,2)->nullable();
            
            $table->integer('87_ingresos_hog')->nullable();
            
            $table->integer('88_viv_pred')->nullable();
            
            $table->integer('89_mat_pared')->nullable();
            
            $table->integer('90-mate-predom')->nullable();
            
            $table->decimal('91_area_viv',10,2)->nullable();
            
            $table->integer('92_pers_viv')->nullable();
            
            $table->integer('93_ser_pub')->nullable();
            
            $table->integer('94_educacion')->nullable();
            
            $table->integer('95_salud')->nullable();
            
            $table->integer('96_reg_salud')->nullable();
            
            $table->decimal('97_distance_ss',10,2)->nullable();
            
            $table->integer('98_salud_cob_san')->nullable();
            
            $table->integer('99_asociacion')->nullable();
            
            $table->integer('100-satisfaccion')->nullable();
            
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
        Schema::dropIfExists('forulario_generales');
    }
}
