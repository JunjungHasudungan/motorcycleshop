<?php

use Illuminate\Database\Seeder;
use App\Models\Motor;
class MotorServiceTableSeeder extends Seeder
{

    public function run()
    {
        Motor::findOrFail(1)->motorservices()->sync([1]);
        Motor::findOrFail(2)->motorservices()->sync([1, 2]);
        Motor::findOrFail(3)->motorservices()->sync([1, 2, 3]);
    }
}
