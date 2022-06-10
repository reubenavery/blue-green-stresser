#!/bin/sh

set -e -x

docker build --build-arg COLOR=$COLOR --tag $image .

$PUSH_IMAGE && docker push $image
