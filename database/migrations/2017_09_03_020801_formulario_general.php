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
                       
            $table->string('Pcoordenadas',90)->nullable();
            
            $table->integer('P1_cod_pred')->nullable();
            
            $table->string('P2_nom_vereda',90)->nullable();
            
            $table->string('P3_nom_predio',90)->nullable();
            
            $table->integer('P4_c_adp')->nullable();
            
            $table->string('P5_nom_ape',90)->nullable();
            
            $table->integer('P6_num_tel')->nullable();
            
            $table->integer('P7_rel_act')->nullable();
            
            $table->integer('P8_p_act_agr')->nullable();
            
            $table->integer('P9_p_act_pec')->nullable();
            
            $table->integer('P10_p_act_noap')->nullable();
            
            $table->integer('P11_e_bos_fores')->nullable();
            
            $table->integer('P12_e_past_rast')->nullable();
            
            $table->integer('P13_e_prot_conser')->nullable();
            
            $table->integer('P14_e_otros_usos')->nullable();
            
            $table->integer('P15_C_tenencia')->nullable();
            
            $table->integer('P16_doc_legal')->nullable();
            
            $table->decimal('P17_areaTotal',10,2)->nullable();
            
            $table->decimal('P18_area_AAG',10,2)->nullable();
            
            $table->decimal('P19_area_APE',10,2)->nullable();
            
            $table->decimal('P19_area_APfores',10,2)->nullable();
            
            $table->decimal('P21_area_Bosq',10,2)->nullable();
            
            $table->decimal('P22_area_pasto',10,2)->nullable();
            
            $table->decimal('P23_area_ANA',10,2)->nullable();
            
            $table->decimal('P24_area_proteccion',10,2)->nullable();
            
            $table->decimal('P25_area_construida',10,2)->nullable();
            
            $table->integer('P43_maq_agri')->nullable();
            
            $table->decimal('P44_area_cons_AA',10,2)->nullable();
            
            $table->decimal('P45_ins_ext',10,2)->nullable();
            
            $table->integer('P46_gan_bov')->nullable();
            
            $table->integer('P47_alim_bovino')->nullable();
            
            $table->decimal('P48_area_bovina',10,2)->nullable();
            
            $table->integer('P49_bov_machos')->nullable();
            
            $table->integer('P49_bov_hembras')->nullable();
            
            $table->integer('P50_orient_bov')->nullable();
            
            $table->decimal('P51_cant_leche',10,2)->nullable();
            
            $table->integer('P52_finalidad_bov')->nullable();
            
            $table->decimal('P53_cant_lech_auto',10,2)->nullable();
            
            $table->decimal('P60_area_cons_AP',10,2)->nullable();
            
            $table->string('P61_can_com',90)->nullable();
            
            $table->string('P62_mejor_suelo',90)->nullable();
            
            $table->string('P63_cont_enf',90)->nullable();
            
            $table->string('P64_fuen_agua',90)->nullable();
            
            $table->string('P65_desechos',90)->nullable();
            
            $table->string('P66_trato_desechos',90)->nullable();
            
            $table->string('P67_trans_tala',90)->nullable();
            
            $table->integer('P68_prote_fuen_nat')->nullable();
            
            $table->string('P69_proteccion_agua',90)->nullable();
            
            $table->integer('P70_prod_bos_par')->nullable();
            
            $table->integer('P71_cob_veg')->nullable();
            
            $table->integer('P72_pendiente')->nullable();
            
            $table->integer('P73_orient_surcos')->nullable();
            
            $table->integer('P74_rot_cultivos')->nullable();
            
            $table->integer('P75_act_sostenible')->nullable();
            
            $table->integer('P75_1_escala')->nullable();
            
            $table->string('P76_act_no_agro',90)->nullable();
            
            $table->integer('P77_traba_perm_AA')->nullable();
            
            $table->integer('P77_1_mujer_perm_AA')->nullable();
            
            $table->integer('P78_trab_hog_prod_AA')->nullable();
            
            $table->integer('P78_1mujhog_prodAA')->nullable();
            
            $table->integer('P79_trab_hog_asalar')->nullable();
            
            $table->integer('P79_1muj_hog_asalar')->nullable();
            
            $table->integer('P80_jorn_AA')->nullable();
            
            $table->integer('P80_1mujer_jorn_AA')->nullable();
            
            $table->decimal('P81_horas_AA',10,2)->nullable();
            
            $table->integer('P82_trab_perma_ANA')->nullable();
            
            $table->integer('P82_1muj_perma_ANA')->nullable();
            
            $table->integer('P83_trab_hog_prod_AN')->nullable();
            
            $table->integer('P83_1_muj_hog_pr_ANA')->nullable();
            
            $table->integer('P84_asal_ANA')->nullable();
            
            $table->integer('P84_1_muj_asal_ANA')->nullable();
            
            $table->integer('P85_jornal_ANA')->nullable();
            
            $table->decimal('P86_horas_ANA',10,2)->nullable();
            
            $table->integer('P87_ingresos_hog')->nullable();
            
            $table->integer('P88_viv_pred')->nullable();
            
            $table->integer('P89_mat_pared')->nullable();
            
            $table->integer('P90_mate_predom')->nullable();
            
            $table->decimal('P91_area_viv',10,2)->nullable();
            
            $table->integer('P92_pers_viv')->nullable();
            
            $table->integer('P93_ser_pub')->nullable();
            
            $table->integer('P94_educacion')->nullable();
            
            $table->integer('P95_salud')->nullable();
            
            $table->integer('P96_reg_salud')->nullable();
            
            $table->decimal('P97_distance_ss',10,2)->nullable();
            
            $table->integer('P98_salud_cob_san')->nullable();
            
            $table->integer('P99_asociacion')->nullable();
            
            $table->integer('P100_satisfaccion')->nullable();
            
            $table->text('P101_observaciones')->nullable();
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
