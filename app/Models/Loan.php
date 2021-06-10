<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = 'loans'; // kecamatan

    protected $fillable  = ['name', 'district_id'];

    public function provinces()
    {
        return $this->belongsTo(Province::class, 'district_id');
    }
}
