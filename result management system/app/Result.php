<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'course_id','session','semester','student_id','score','approved','submitted_by','department_id','point','reject_reason'
    ];

    protected $table = "results";

    public function student(){
        
        return $this->belongsto(User::class,'student_id');
    }

    public function users(){
        return $this->belongsTo(User::class,'submitted_by');
    }

    public function course(){
        return $this->belongsto(Course::class);
    }

    public function set(){
        return $this->belongsto(Sch_session::class,'session');
    }

    public function department(){
        return $this->belongsto(Departments::class,'department_id');
    }
}
