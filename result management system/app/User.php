<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Ultraware\Roles\Traits\HasRoleAndPermission;
use Ultraware\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;
use Ultraware\Roles\Models\Role;

class User extends Authenticatable implements HasRoleAndPermissionContract
{
    use Notifiable;
    use HasRoleAndPermission;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','department_id','id_no','student_set','student_type','guardian_email','phone','birthday','address','gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function department(){
        
        return $this->belongsto(Departments::class);
    }

    public function student()
    {
        return $this->hasOne(Students::class);
    }

    public function resultby(){
        return $this->hasMany(Result::class,'submitted_by');
    }

    public function result(){
        return $this->hasMany(Result::class,'student_id');
    }
}
