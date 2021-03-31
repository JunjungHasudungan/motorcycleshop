<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $fillable = ['id_teacher','name', 'slug', 'birth_of_day', 'birth_of_pleace', 'gender', 'role_id'];

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
