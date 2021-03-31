<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['title'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}