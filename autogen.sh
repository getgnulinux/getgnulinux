#!/bin/sh

set -ex

# `autoreconf` gives an error "no 'Makefile.am' found", but this can be
# ignored.
autoreconf --install 2> /dev/null || true
