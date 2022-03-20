#!/bin/bash
docker run \
--rm \
-ti \
-p 80:80 \
-v $PWD/td/td1:/var/www/html \
--hostname debian11 maximechartier/but-rt-deb