less /usr/share/i18n/SUPPORTED
make deploy
make clean build
make develop
./configure --localedir=/home/node/getgnulinux/docroot/locale/
autoreconf --install
