<?php

use Illuminate\Database\Seeder;
use App\Models\Capasity;
// use App\Models\Motor;

class CapasityMotorTableSeeder extends Seeder
{

    public function run()
    {
        Capasity::findOrFail(1)->motors()->sync([1, 4, 8, 13, 14]); // 110 CC
        Capasity::findOrFail(2)->motors()->sync([2, 3, 5, 11]); // 125 CC
        Capasity::findOrFail(3)->motors()->sync([6, 7, 9, 10, 12, 15]); // 150 CC
        Capasity::findOrFail(4)->motors()->sync(4, 16); // 155 CC

        // Motor::findOrFail(1)->capasities()->sync([1, 2, 3]); // Vario 
        // Motor::findOrFail()->capasities()->sync();
    }
}
