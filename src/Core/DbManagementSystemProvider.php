<?php

namespace Singularity\Core\Connection;

use Singularity\Core\Connection;
use Singularity\Core\QueryHandler;

abstract class DbManagementSystemProvider
{
    /** @return class-string<Connection> */
    abstract public static function connection(): string;

    /** @return class-string<QueryHandler> */
    abstract public static function queryHandler(): string;
}