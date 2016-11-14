#!/bin/bash

if [ `id -u` != "0" ];
then
    echo "You must be root to generate locale definition files."
    exit 1
fi

# Locales used by GGL.
locales=(ar_SA ast_ES bg_BG ca_AD cy_GB da_DK de_DE en_US el_GR eo es_ES
et_EE fa_IR fi_FI fr_FR gl_ES he_IL hr_HR ia_FR id_ID it_IT ja_JP lt_LT mk_MK
ml_IN ms_MY nl_NL pl_PL pt_BR pt_PT ru_RU si_LK sr_RS sv_SE tr_TR uk_UA uz_UZ
vi_VN zh_CN zh_TW)

locale_list=""
for locale in ${locales[@]};
do
	locale_list="${locale_list} ${locale}.UTF-8"
done

locale-gen ${locale_list}
