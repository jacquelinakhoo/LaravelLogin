<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Databases extends Model
{
    public function pull($Iyan, $Jo)
    {
        return DB::table($Iyan)->where($Jo)->first();
    }

    public function tampil($table)
    {
        return DB::table($table)
        ->get();
    }
}
