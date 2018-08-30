<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    public function user(){
        
        return $this->belongsto(User::class);
    }
}
