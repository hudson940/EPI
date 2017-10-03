<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table='formulario_generales';
    protected $fillable=[ 'Pcoordenadas', 'P1_cod_pred', 'P2_nom_vereda', 'P3_nom_predio', 'P4_c_adp', 'P5_nom_ape', 'P6_num_tel', 'P7_rel_act', 'P8_p_act_agr', 'P9_p_act_pec', 'P10_p_act_noap', 'P11_e_bos_fores', 'P12_e_past_rast', 'P13_e_prot_conser', 'P14_e_otros_usos', 'P15_C_tenencia', 'P16_doc_legal', 'P17_areaTotal', 'P18_area_AAG', 'P19_area_APE', 'P19_area_APfores', 'P21_area_Bosq', 'P22_area_pasto', 'P23_area_ANA', 'P24_area_proteccion', 'P25_area_construida', 'P43_maq_agri', 'P44_area_cons_AA', 'P45_ins_ext', 'P46_gan_bov', 'P47_alim_bovino', 'P48_area_bovina', 'P49_bov_machos', 'P49_bov_hembras', 'P50_orient_bov', 'P51_cant_leche', 'P52_finalidad_bov', 'P53_cant_lech_auto', 'P60_area_cons_AP', 'P61_can_com', 'P62_mejor_suelo', 'P63_cont_enf', 'P64_fuen_agua', 'P65_desechos', 'P66_trato_desechos', 'P67_trans_tala', 'P68_prote_fuen_nat', 'P69_proteccion_agua', 'P70_prod_bos_par', 'P71_cob_veg', 'P72_pendiente', 'P73_orient_surcos', 'P74_rot_cultivos', 'P75_act_sostenible', 'P75_1_escala', 'P76_act_no_agro', 'P77_traba_perm_AA', 'P77_1_mujer_perm_AA', 'P78_trab_hog_prod_AA', 'P78_1mujhog_prodAA', 'P79_trab_hog_asalar', 'P79_1muj_hog_asalar', 'P80_jorn_AA', 'P80_1mujer_jorn_AA', 'P81_horas_AA', 'P82_trab_perma_ANA', 'P82_1muj_perma_ANA', 'P83_trab_hog_prod_AN', 'P83_1_muj_hog_pr_ANA', 'P84_asal_ANA', 'P84_1_muj_asal_ANA', 'P85_jornal_ANA', 'P86_horas_ANA', 'P87_ingresos_hog', 'P88_viv_pred', 'P89_mat_pared', 'P90_mate_predom', 'P91_area_viv', 'P92_pers_viv', 'P93_ser_pub', 'P94_educacion', 'P95_salud', 'P96_reg_salud', 'P97_distance_ss', 'P98_salud_cob_san', 'P99_asociacion', 'P100_satisfaccion', 'P101_observaciones', ]; }