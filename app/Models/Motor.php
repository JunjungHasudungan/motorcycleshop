<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = 'motors';
    protected $fillable = ['name'. 'type', 'year', 'capasity'];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'motor_service', 'motor_id', 'service_id');
    }

    public function users()
    {
        return $this->belongsToMany(\App\User::class, 'motor_user', 'motor_id', 'user_id');
    }

    public function spareparts()
    {
        return $this->hasMany(SparePart::class)->latest();
    }
}
