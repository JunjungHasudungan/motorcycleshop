<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = 'motors';
    protected $fillable = ['name'. 'type', 'year', 'capasity_id', 'user_id', 'no_plat' ];


    public function users()
    {
        return $this->belongsToMany(\App\User::class, 'motor_user', 'motor_id', 'user_id');
    }

    public function spareparts()
    {
        return $this->hasMany(Sparepart::class)->latest();
    }

    public function jasaservices()
    {
        return $this->hasOne(Jasaservice::class);
    }

    public function capasities()
    {
        return $this->belongsTo(Capasity::class, 'capasity_id');
    }
}
