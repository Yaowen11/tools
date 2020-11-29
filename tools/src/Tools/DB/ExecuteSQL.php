<?php


namespace Tools\DB;


interface ExecuteSQL
{
    public function executeDDLSQL(string $sql);

    public function executeMDLSQL(string $sql, array $data): bool;

    public function getExecuteSQLResult(): ExecuteSQLResult;
}