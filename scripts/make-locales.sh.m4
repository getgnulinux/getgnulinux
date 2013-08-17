#!/bin/bash
changequote(`'', `'')

if [ `id -u` != "0" ];
then
    echo "You must be root to generate locale definition files."
    exit 1
fi

locales=(LOCALES)
utf8_locales=(UTF8_LOCALES)
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

LOCALE_GEN ${locale_list}
