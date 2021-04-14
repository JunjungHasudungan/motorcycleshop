<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'created_at', 
        'updated_at',
        'deleted_at',
        'remember_token', 
        'email_verified_at', 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getIsMechanic()
    {
        return $this->roles()->where('id', 2)->exists();
    } 

    public function motors()
    {
        return $this->belongsToMany(Motor::class);
    }

    public function biographies()
    {
        return $this->hasOne(Biography::class);
    }

}
