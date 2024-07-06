<?php

namespace Singularity\Providers\MySql;

use PDO;
use Singularity\Core\Connection;

class MySqlConnection extends Connection
{
    protected function mountDsn(): string
    {
        return "mysql:host=$this->host;dbname=$this->database;charset=$this->charset";
    }

    protected function pdoOptions(): array
    {
        return [];
    }
}