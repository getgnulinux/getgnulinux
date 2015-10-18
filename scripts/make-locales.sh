#!/bin/bash

if [ `id -u` != "0" ];
then
    echo "You must be root to generate locale definition files."
    exit 1
fi

# Locales used by GGL.
locales=(ar_SA ast_ES bg_BG ca_AD da_DK de_DE en_US eo es_ES et_EE fi_FI fr_FR
gl_ES he_IL hr_HR ia id_ID it_IT ja_JP lt_LT mk_MK ml_IN nl_NL pl_PL pt_BR
pt_PT ru_RU sr_RS sv_SE tr_TR uk_UA uz_UZ vi_VN zh_CN zh_TW)

# These are locales that by default use the UTF-8 character set. For these
# locales the ".UTF-8" suffix should not be used when compiling locale
# definition files.
utf8_locales=(ia ml_IN sr_RS vi_VN)

locale_list=""
for locale in ${locales[@]};
do
    switch=0
    for u in ${utf8_locales[@]};
    do
        if [ $u == $locale ];
        then
            locale_list="${locale_list} ${locale}"
            switch=1
            break
        fi
    done;

    if [ $switch == 0 ];
    then
        locale_list="${locale_list} ${locale}.UTF-8"
    fi
done

locale-gen ${locale_list}
