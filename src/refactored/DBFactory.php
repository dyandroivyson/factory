<?php

declare(strict_types=1);

include_once 'Database/MySQL.php';
include_once 'Database/Mongo.php';
include_once 'Database/Postgres.php';

use Database\MySQL;
use Database\Mongo;
use Database\Postgres;

class DBFactory
{
    private string $driver;

    /**
     * @param string $driver
     */
    public function setDriver(string $driver): void
    {
        $this->driver = $driver;
    }

    public function selectDatabase(string $host, string $db, string $username, string $password): void
    {
        if ($this->driver === 'mysql') {
            $conn = new MySQL;
        } else if ($this->driver === 'mongo') {
            $conn = new Mongo;
        } else if ($this->driver === 'postgres') {
            $conn = new Postgres;
        }

        $conn->setHost($host);
        $conn->setDb($db);
        $conn->setUsername($username);
        $conn->setPassword($password);
        $conn->connect();
    }
}