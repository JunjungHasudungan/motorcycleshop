<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts'; // Kecamatan
    
    protected $fillable = ['name'];
}
