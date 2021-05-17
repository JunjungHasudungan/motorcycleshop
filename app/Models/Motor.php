<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Scopes\CapasityScope;

class Motor extends Model
{
    use SoftDeletes;

    protected $table = 'motors';

    protected $fillable = ['name', 'type', 'created_at_year', 'no_plat', 'slug', 'capasity_id', 'category_id'];


    public function users()
    {
        return $this->belongsToMany(User::class, 'motor_user', 'motor_id', 'user_id');
    }

    public function spareparts()
    {
        return $this->belongsToMany(Sparepart::class);
    }

    public function motorservices()
    {
        return $this->belongsToMany(\App\Models\Service::class, 'motor_service', 'motor_id', 'service_id');
    }


    public function scopeCapasity($query)
    {
        return $query->where('capasity_id', '>', 0);
    }
    
     
    public function capasities()
    {
        return $this->belongsTo(Capasity::class, 'capasity_id');
    }

    public function categoriesMotors()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // dynamic Local-scope
    public function scopeCreatedByYear($query, $order)
    {
        return $query->where('created_by_year', '>', 2012)->orderBy('created_by_year', $order);
    }

    // Global Scope
/*         protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new CapasityScope);
    } */
}
