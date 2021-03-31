<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';
    protected $fillable = ['student_id', 'subject_id', 'registrasionDate', 'period'];

    public function students()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
