<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'title', 'course_code','unit', 'department_id','semester'
    ];

    protected $table = "courses";

    public function user(){
        
        return $this->belongsto(User::class);
    }

    public function department(){
        
        return $this->belongsto(Departments::class);
    }

    public function student(){
        
        return $this->hasMany(Students::class);
    }
}
