less /usr/share/i18n/SUPPORTED
autoreconf --install
make deploy
make maintainer-clean
make clean
make update-po
make update-gmo
make build deploy-dev
./configure --localedir=/home/node/getgnulinux/docroot/locale/
./autogen.sh
