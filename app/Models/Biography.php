<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    protected $table = 'biographies';
    
    protected $fillable = ['id_user', 'birthday_of_place', 'birthday_of_date', 'domicile', 'gender', 'user_id'];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}
