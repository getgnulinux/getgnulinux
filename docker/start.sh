#!/bin/bash

set -e

docker compose build --pull
docker compose run --rm builder bash
