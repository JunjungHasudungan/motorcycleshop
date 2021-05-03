<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capasity extends Model
{
    protected $table = 'capasities';

    protected $fillable = ['capasity'];   

    public function motors()
    {
        return $this->belongsToMany(Motor::class)->orderBy('name', 'asc');
    }
}
