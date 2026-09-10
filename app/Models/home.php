<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    public function jackianlina($iyan, $girasya)
    {
        return \DB::table($this->getTable())->where($iyan, $girasya)->get()->first();
    }
}
