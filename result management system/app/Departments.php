<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $fillable = [
        'name','college_id','hod_id'
    ];

    protected $table = "departments";

    public function college(){
        
        return $this->belongsto(Colleges::class);
    }

    public function hod(){
        
        return $this->belongsto(User::class);
    }

    public function user(){
        
        return $this->hasMany(User::class);
    }

    public function course(){
        
        return $this->hasMany(Course::class);
    }
    public function department(){
        
        return $this->hasMany(Result::class);
    }
}
