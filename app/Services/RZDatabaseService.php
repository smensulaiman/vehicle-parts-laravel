<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class RZDatabaseService
{
    private static RZDatabaseService $instance;

    private function __construct(){}

    public static function getInstance(): RZDatabaseService
    {
        if (is_null(self::$instance)) {
            self::$instance = new RZDatabaseService();
        }

        return self::$instance;
    }

    public function getDataFromTable($tableName, $conditions = []): Collection
    {
        $query = DB::table($tableName);

        foreach ($conditions as $column => $value) {
            $query->where($column, $value);
        }

        return $query->get();
    }

}
