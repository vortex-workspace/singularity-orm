<?php

namespace Singularity\Core;

use PDO;

abstract class Connection
{
    final public function __construct(
        public readonly string  $host,
        public readonly string  $database,
        public readonly string  $username,
        public readonly string  $password,
        public readonly int     $port,
        public readonly ?string $charset,
        public readonly ?string $collate,
    )
    {

    }

    abstract protected function mountDsn(): string;

    /**
     * - The fetch mode and error mode are reserved for the default configuration from the ORM. If these values are set,
     * they will be **ignored** and **overwritten** at runtime.
     * @return array Return an array of key values pair to set specific PDO connection options.
     */
    abstract protected function pdoOptions(): array;

    final public function make(): PDO
    {
        return new PDO(static::mountDsn(), $this->username, $this->password, array_merge($this->pdoOptions(), [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
        ]));
    }
}