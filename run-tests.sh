#!/usr/bin/env bash
sudo service mysql stop
sudo service nginx stop
docker-compose stop
docker-compose -f docker-compose-tests.yml up -d
docker-compose -f docker-compose-tests.yml exec php ./docker-test.sh
docker-compose -f docker-compose-tests.yml stop
docker-compose start
echo "If databases fail, run \"docker-compose -f docker-compose-tests.yml up \" and wait until mysql stops outputting, then ctrl+C and re-run."