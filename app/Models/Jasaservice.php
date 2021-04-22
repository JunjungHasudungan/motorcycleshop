<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jasaservice extends Model
{
    protected $table = 'jasaservices';

    protected $fillable = ['name', 'price', 'slug'];
}
