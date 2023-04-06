<?php

declare(strict_types=1);

namespace Database;

class Postgres
{
    private string $host;
    private string $db;
    private string $username;
    private string $password;

    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    public function setDb(string $db): void
    {
        $this->db = $db;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function connect(): void
    {
        echo 'Connect on Postgres';
    }
}