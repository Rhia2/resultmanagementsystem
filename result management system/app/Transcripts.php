<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transcripts extends Model
{
    public function student(){
        
        return $this->belongsto(Students::class);
    }
}
