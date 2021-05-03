<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['motor_id'];

    public function categoriesMotors()
    {
        return $this->belongsToMany(Motor::class, 'category_motor', 'category_id', 'motor_id')->orderBy('name','asc');
    }
}
