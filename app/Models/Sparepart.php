<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    protected $table = 'spareparts';

    protected $fillable = ['id_sparepart', 'name', 'price', 'slug', 'motor_id'];

    public function motors()
    {
        return $this->belongsTo(Motor::class, 'motor_id');
    }
}
