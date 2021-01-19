#!/bin/bash

set -e

SCRIPT_PATH="$(dirname "$(readlink -f $0)")"
. "${SCRIPT_PATH}/dockerenv"

docker-compose -p dev -f "${COMPOSE_FILE}" down --volumes --remove-orphans
