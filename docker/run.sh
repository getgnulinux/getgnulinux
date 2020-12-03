#!/bin/bash

set -e

SCRIPT_PATH="$(dirname "$(readlink -f $0)")"
. "${SCRIPT_PATH}/dockerenv"

docker-compose -p dev -f "${COMPOSE_FILE}" build
docker-compose -p dev -f "${COMPOSE_FILE}" run --rm ci "$@"
