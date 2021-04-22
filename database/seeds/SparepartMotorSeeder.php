<?php

use Illuminate\Database\Seeder;
use App\Models\Motor;
class SparepartMotorSeeder extends Seeder
{

    public function run()
    {
        
        Motor::findOrFail(1)->spareparts()->sync([1, 2, 3]);
        Motor::findOrFail(2)->spareparts()->sync(4);
        Motor::findOrFail(3)->spareparts()->sync([5, 6, 7 ]);
    }
}
