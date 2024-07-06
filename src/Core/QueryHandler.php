<?php

namespace Singularity\Core;

interface QueryHandler
{
    public static function selectBuilder();

    public static function insertBuilder();

    public static function deleteBuilder();

    public static function updateBuilder();

    public static function TableBuilder();
}