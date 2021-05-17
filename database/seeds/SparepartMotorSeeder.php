<?php

use Illuminate\Database\Seeder;
use App\Models\Sparepart;
class SparepartMotorSeeder extends Seeder
{

    public function run()
    {
        
        Sparepart::findOrFail(1)->motors()->sync([1, 3, 5]);
        Sparepart::findOrFail(2)->motors()->sync([2, 4]);
        Sparepart::findOrFail(3)->motors()->sync([7, 9, 11 ]);
        Sparepart::findOrFail(4)->motors()->sync([8, 10 ]);
        Sparepart::findOrFail(5)->motors()->sync([13, 14 ]);
        Sparepart::findOrFail(6)->motors()->sync([5, 6, 7 ]);
    }
}
