<?php

namespace App\Utils;

use Illuminate\Support\Facades\DB;

class DBUtil
{
    public static function reConnectDB($schema)
    {
        config(['database.connections.pgsql.schema' => $schema]);
        DB::reconnect('pgsql');
    }
}
