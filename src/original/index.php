<?php

include_once 'Database/MySQL.php';
include_once 'Database/Mongo.php';
include_once 'Database/Postgres.php';

use Database\MySQL;
use Database\Mongo;
use Database\Postgres;

selectDatabase('postgres', 'localhost', 'test', 'admin', '123456');

function selectDatabase(string $type, string $host, string $db, string $username, string $password): void
{
    if ($type === 'mysql') {
        $mysql = new MySQL;
        $mysql->setHost($host);
        $mysql->setDb($db);
        $mysql->setUsername($username);
        $mysql->setPassword($password);
        $mysql->connect();
    } else if ($type === 'mongo') {
        $mysql = new Mongo;
        $mysql->setHost($host);
        $mysql->setDb($db);
        $mysql->setUsername($username);
        $mysql->setPassword($password);
        $mysql->connect();
    } else if ($type === 'postgres') {
        $mysql = new Postgres();
        $mysql->setHost($host);
        $mysql->setDb($db);
        $mysql->setUsername($username);
        $mysql->setPassword($password);
        $mysql->connect();
    }
}