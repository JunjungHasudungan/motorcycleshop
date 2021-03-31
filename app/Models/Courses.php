<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';
    protected $fillable = ['name', 'point', 'major_id'];
    
    public function majors()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }
}
