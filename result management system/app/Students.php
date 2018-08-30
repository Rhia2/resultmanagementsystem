<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = [
        'first_course_id','user_id','parent_email','session','second_course_id'
    ];

    protected $table = "students";

    public function department(){
        
        return $this->belongsto(Departments::class);
    }

    public function course(){
        
        return $this->hasMany(Course::class);
    }

    public function result(){
        
        return $this->hasMany(Result::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
