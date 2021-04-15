<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capasity extends Model
{
    protected $table = 'capasity';
    protected $fillable = ['capasity', 'motor_id'];   

    public function motors()
    {
        return $this->belongsTo(Motor::class, 'motor_id');
    }
}
