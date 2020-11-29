<?php


namespace Tools\DB;

use PDO;

interface PDOConnection
{
    public function generateConnection(string $dsn, string $user, string $password);

    public function setConnection(PDO $connection): void;

    public function getConnection(): PDO;
}