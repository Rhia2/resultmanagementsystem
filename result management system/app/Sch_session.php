<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sch_session extends Model
{
    protected $table = "sch_session";

    public function result()
    {
        return $this->hasMany(Result::class);
    }
}
