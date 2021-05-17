<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    protected $table = 'spareparts';

    protected $fillable = ['id_sparepart', 'name', 'amount', 'price', 'slug'];

    public function motors()
    {
        return $this->belongsToMany(Motor::class);
    }
}
