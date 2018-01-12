Requirements
============

1. Linux box
1. docker version ^17.05.0
1. docker-compose version ^1.8.0

Installation
============

1. `git clone https://github.com/sheershoff/yii2-test-task yii2-test-task-sheershoff && cd yii2-test-task-sheershoff`
1. `docker-compose up` or `./start-local.sh`, you have to wait for mysql while it creates data directories if they're 
not there (20-30s, YMMV)
1. `docker-compose exec php composer install`

Run
===

1. `docker-compose up` or use `start-local.sh` that attempts to stop nginx and mysql on host machine first

Tests
=====

 * `run-tests.sh` - stops running containers, starts containers from docker-compose-tests.yml, applies migrations to 
  separate tests DB and runs all codeception tests
 * `exec-tests.sh` - runs all codeception tests within main running containers
 * `unit-exec.sh` - runs unit codeception tests within main running containers
 * `docker-test.sh` - script that runs all codeception tests, assuming it is launched from set up env (e.g. docker container)

Usage
=====

Console
-------

1. `./start-local.sh`, then `docker-compose exec php ./yii divide -n=1 -a=1,2,3`

REST API
--------

1. Navigate to `http://localhost` or `http://itppl-test-sheershoff.localhost`