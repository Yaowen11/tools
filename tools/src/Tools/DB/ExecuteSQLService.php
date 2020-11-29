<?php


namespace Tools\DB;


class ExecuteSQLService implements ExecuteSQL
{

    private PDOConnection $pdoConnection;

    private ExecuteResult $result;

    public function __construct(PDOConnection $connection)
    {
        $this->pdoConnection = $connection;
    }

    public function executeDDLSQL(string $sql)
    {
        $this->pdoConnection->getConnection()->query($sql);
    }

    public function executeMDLSQL(string $sql, array $data): bool
    {
        // TODO: Implement executeMDLSQL() method.
    }

    public function getExecuteSQLResult(): ExecuteSQLResult
    {
        // TODO: Implement getExecuteSQLResult() method.
    }
}