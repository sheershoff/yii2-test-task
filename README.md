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

Usage
=====

1. Navigate to `http://localhost` or `http://itppl-test-sheershoff.localhost`