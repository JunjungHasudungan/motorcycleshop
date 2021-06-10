<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer_Motor_Service extends Model
{
    protected $table = 'customer_motor_services';

    protected $fillable = ['name', 'no_plat', 'loan_id', 'motor_id'];

    public function loans()
    {
        return $this->belongsTo(Loan::class);
    }

    public function motors()
    {
        return $this->belongsTo(Motor::class);
    }
}
