<?php

namespace Singularity\Providers;

use Singularity\Core\Connection\DbManagementSystemProvider;

class MySqlManagementSystemProvider extends DbManagementSystemProvider
{

    /**
     * @inheritDoc
     */
    public static function connection(): string
    {
        // TODO: Implement connection() method.
    }

    /**
     * @inheritDoc
     */
    public static function queryHandler(): string
    {
        // TODO: Implement queryHandler() method.
    }
}