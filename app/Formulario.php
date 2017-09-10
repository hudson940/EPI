<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table='formulario_generales';
    protected $fillable=[ 'coordenadas', '1-cod_pred', '2-nom_vereda', '3-nom_predio', '4-c_adp', '5-nom_ape', '6-num_tel', '7-rel_act', '8-p_act-agr', '9-p_act-pec', '10-p_act-noap', '11-e_bos_fores', '12-e_past_rast', '13-e_prot_conser', '14-e_otros_usos', '15-C_tenencia', '16-doc-legal', '17-areaTotal', '18-area-AAG', '19-area-APE', '19-area-APfores', '21-area-Bosq', '22-area-pasto', '23_area_ANA', '24_area_proteccion', '25_area_construida', '43-maq-agri', '44_area_cons-AA', '45_ins_ext', '46_gan_bov', '47-alim-bovino', '48-area-bovina', '49-bov-machos', '49-bov-hembras', '50-orient-bov', '51-cant-leche', '52-finalidad-bov', '53-cant-lech-auto', '60_area_cons-AP', '61_can_com', '62_mejor_suelo', '63_cont_enf', '64_fuen_agua', '65_desechos', '66_trato_desechos', '67_trans_tala', '68_prote_fuen_nat', '69_proteccion_agua', '70_prod_bos_par', '71_cob_veg', '72_pendiente', '73_orient_surcos', '74_rot_cultivos', '75_act_sostenible', '76_act_no-agro', '77_traba_perm_AA', '78_trab_hog_prod_AA', '79_trab_hog_asalar', '80_jorn_AA', '81_horas_AA', '82_trab_perma_ANA', '83_trab_hog_prod_ANA', '84_asal_ANA', '85_jornal_ANA', '86_horas_ANA', '87_ingresos_hog', '88_viv_pred', '89_mat_pared', '90-mate-predom', '91_area_viv', '92_pers_viv', '93_ser_pub', '94_educacion', '95_salud', '96_reg_salud', '97_distance_ss', '98_salud_cob_san', '99_asociacion', '100-satisfaccion'];
}
