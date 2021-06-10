<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendances';

    protected $fillable = ['user_id', 'start_work', 'end_work', 'description'];


    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
