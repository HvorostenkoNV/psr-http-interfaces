#!/bin/bash

cd docker
docker-compose down
docker-compose up -d
docker exec -it psr-http-interfaces-php sh