<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permisions';
    
    protected $fillable = ['title'];

    public function permissionRoles()
    {
        return $this->belongsToMany(Role::class);
    }
}
