<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesMotorTableSeeder extends Seeder
{
    public function run()
    {
        Category::findOrFail(1)->categoriesMotors()->sync([1, 2, 3, 4, 5, 13 ,14, ]); // matic
        Category::findOrFail(2)->categoriesMotors()->sync(6, 2, 15); // matic-sport
        Category::findOrFail(3)->categoriesMotors()->sync([8, 11]); // manual-bebek
        Category::findOrFail(4)->categoriesMotors()->sync([10, 15]); // manual-bebek-sport
        Category::findOrFail(5)->categoriesMotors()->sync([7, 9]); // manual-bebek-sport
    }
}
