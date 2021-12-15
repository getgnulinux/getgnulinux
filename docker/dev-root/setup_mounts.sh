#!/bin/bash

set -e

mkdir /container
mount -o bind / /container

for NAME in node_modules; do
  DIR="/home/node/getgnulinux/${NAME}"
  mkdir -p "$DIR"
  mount -o rbind "/container/${DIR}" "${DIR}"
done

umount /container
rmdir /container

export USER="node"
export HOME="/home/node"
export TERM="xterm-256color"
source $HOME/.profile

cd "${HOME}/getgnulinux"
exec chroot --userspec=node --skip-chdir / "$@"
