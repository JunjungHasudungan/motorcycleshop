<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1, 
                'name'           => 'Junjung Hasudungan Sitorus',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('admin'),
                'remember_token' => null,
                'slug'          => null,                
            ],
            [
                'id'             => 2, 
                'name'           => 'Caca-Mechanic3',
                'email'          => 'mechanic3@caca.com',
                'password'       => bcrypt('mechanic3'),
                'remember_token' => null,
                'slug'          => null,                
            ],
            [
                'id'             => 3, 
                'name'           => 'Rendi Ginting',
                'email'          => 'rendi@rendi.com',
                'password'       => bcrypt('rendi'),
                'remember_token' => null,
                'slug'          => null,                
            ],
            [
                'id'             => 4, 
                'name'           => 'Agus Santoso',
                'email'          => 'agus@agus.com',
                'password'       => bcrypt('agus'),
                'remember_token' => null,
                'slug'          => null,                
            ],
            [
                'id'             => 5, 
                'name'           => 'Fitri agustina',
                'email'          => 'fitri@fitri.com',
                'password'       => bcrypt('fitri'),
                'remember_token' => null,
                'slug'          => null,                
            ],
            [
                'id'             => 6, 
                'name'           => 'Putra Aloho',
                'email'          => 'putra@putra.com',
                'password'       => bcrypt('putra'),
                'remember_token' => null,
                'slug'          => null,                
            ],
            [
                'id'             => 7, 
                'name'           => 'Cepi sentoso',
                'email'          => 'cepi@cepi.com',
                'password'       => bcrypt('cepi'),
                'remember_token' => null,
                'slug'          => null,                
            ],
            [
                'id'             => 8, 
                'name'           => 'Mekanik-1',
                'email'          => 'mechanic1@mechanic.com',
                'password'       => bcrypt('mechanic1'),
                'remember_token' => null,
                'slug'          => null,                
            ],
            [
                'id'             => 9, 
                'name'           => 'Mekanik-2',
                'email'          => 'mechanic2@mechanic.com',
                'password'       => bcrypt('mechanic2'),
                'remember_token' => null,
                'slug'          => null,                
            ],
            [
                'id'             => 10, 
                'name'           => 'Mekanik-4',
                'email'          => 'mechanic4@mechanic.com',
                'password'       => bcrypt('mechanic4'),
                'remember_token' => null,
                'slug'          => null,                
            ],
            [
                'id'             => 11, 
                'name'           => 'Debt Colector-2',
                'email'          => 'deptcolector2@deptcolector.com',
                'password'       => bcrypt('deptcolector2'),
                'remember_token' => null,
                'slug'          => null,                
            ],
            [
                'id'             => 12, 
                'name'           => 'Debt Colector-4',
                'email'          => 'deptcolector4@deptcolector.com',
                'password'       => bcrypt('deptcolector4'),
                'remember_token' => null,
                'slug'          => null,                
            ]

        ];

        User::insert($users);
    }
}
