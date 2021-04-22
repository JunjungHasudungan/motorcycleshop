<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = 'motors';

    protected $fillable = ['name'. 'type', 'year', 'no_plat', 'slug' ];


    public function users()
    {
        return $this->belongsToMany(\App\User::class, 'motor_user', 'motor_id', 'user_id');
    }

    public function spareparts()
    {
        return $this->belongsToMany(\App\Models\Sparepart::class, 'spartpart_motor', 'sparepart_id', 'motor_id');
    }

    public function jasaservices()
    {
        return $this->hasOne(Jasaservice::class);
    }

    public function capasities()
    {
        return $this->belongsToMany(Capasity::class);
    }
}
