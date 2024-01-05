#!/usr/bin/env bash

mysql --user=root --password="$MYSQL_ROOT_PASSWORD" <<-EOSQL
    CREATE DATABASE IF NOT EXISTS ethhack;
    GRANT ALL PRIVILEGES ON \`ethhack%\`.* TO '$MYSQL_USER'@'%';
EOSQL
