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
        'id_user',
        'password', 
        'created_at', 
        'updated_at',
        'deleted_at',
        'remember_token', 
        'email_verified_at', 
        'slug',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();  // admin
    }

    public function getIsMechanicAtribute()
    {
        return $this->roles()->where('id', 2)->exists(); // mechanic
    }

    public function getIsChasierAttribute()
    {
        return $this->roles()->where('id', 3)->exists(); // chasier
    }

    public function getIsAdvisorAttrribute()
    {
        return $this->roles()->where('id', 4)->exists(); // advisor
    }

    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'role_user', 'user_id', 'role_id');
    }


    public function motors()
    {
        return $this->belongsToMany(Motor::class);
    }

    public function biographies()
    {
        return $this->hasOne(Biography::class);
    }

    public function scopeActive($query, $order)
    {
        return $query->where('name', 3)->orderBy('created_at', $order);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
