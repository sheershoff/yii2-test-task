#!/usr/bin/env bash
sudo service mysql stop
sudo service nginx stop
docker-compose up
