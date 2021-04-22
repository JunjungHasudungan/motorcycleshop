<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    protected $table = 'spareparts';

    protected $fillable = ['id_sparepart', 'name', 'price', 'slug'];

    public function motors()
    {
        return $this->belongsToMany(\App\Models\Motor::class, 'spartpart_motor', 'motor_id', 'spa');
    }
}
