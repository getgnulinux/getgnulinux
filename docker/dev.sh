#!/bin/bash

set -e

SCRIPT_PATH="$(dirname "$(readlink -f $0)")"
. "${SCRIPT_PATH}/dockerenv"

docker-compose build --pull
docker-compose run --rm builder bash
