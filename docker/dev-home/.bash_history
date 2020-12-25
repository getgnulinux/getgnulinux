less /usr/share/i18n/SUPPORTED
autoreconf --install
make deploy
make maintainer-clean
make clean
make build deploy-dev
./configure --localedir=/home/node/getgnulinux/docroot/locale/
./autogen.sh
