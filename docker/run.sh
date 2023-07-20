#!/bin/sh

set -e

docker compose build --pull
docker compose run --rm runner "$@"
