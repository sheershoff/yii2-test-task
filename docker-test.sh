#!/usr/bin/env bash
echo "This is intended to be run under docker, run ./run-tests.sh..."
echo Migrating the test database... Hope you have created it...
#./yii_test migrate --interactive=0 --migrationPath=@yii/rbac/migrations
./yii_test migrate --interactive=0
./vendor/codeception/base/codecept build
./vendor/codeception/base/codecept run
php -v