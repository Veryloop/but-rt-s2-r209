#!/bin/bash
docker run \
--rm \
-ti \
-p 80:80 \
-v $PWD/td/:/root/td \
-v $PWD/td/db:/var/lib/mysql \
--hostname debian11 maximechartier/but-rt-deb