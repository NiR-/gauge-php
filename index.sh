#!/bin/bash

set -o errexit
set -o nounset
set -o xtrace

docker run \
  --rm \
  -it \
  -e GAUGE_INTERNAL_PORT=${GAUGE_INTERNAL_PORT:-} \
  -e GAUGE_API_PORT=${GAUGE_API_PORT:-} \
  -e GAUGE_IP=${GAUGE_IP:-} \
  -v $(pwd):/usr/src/app \
  -w /usr/src/app \
  --network host \
  php:7.1-cli \
  php index.php $*
