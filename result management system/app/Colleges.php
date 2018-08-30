<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colleges extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $table = "colleges";

    public function department(){
        
        return $this->hasMany(Departments::class);
    }
}
