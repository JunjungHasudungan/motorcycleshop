<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = ['id_service', 'name', 'price', 'user_id'];

    public function motors()
    {
        return $this->belongsToMany(Motor::class, 'motor_service', 'motor_id', 'service_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
