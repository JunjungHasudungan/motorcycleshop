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
            ],
            [
                'id'             => 2, 
                'name'           => 'Caca Cahyana',
                'email'          => 'caca@caca.com',
                'password'       => bcrypt('caca'),
                'remember_token' => null,
            ],
            [
                'id'             => 3, 
                'name'           => 'Rendi Ginting',
                'email'          => 'rendi@rendi.com',
                'password'       => bcrypt('rendi'),
                'remember_token' => null,
            ],
            [
                'id'             => 4, 
                'name'           => 'Agus Santoso',
                'email'          => 'agus@agus.com',
                'password'       => bcrypt('agus'),
                'remember_token' => null,
            ],
            [
                'id'             => 5, 
                'name'           => 'Fitri agustina',
                'email'          => 'fitri@fitri.com',
                'password'       => bcrypt('fitri'),
                'remember_token' => null,
            ],
            [
                'id'             => 6, 
                'name'           => 'Putra Aloho',
                'email'          => 'putra@putra.com',
                'password'       => bcrypt('putra'),
                'remember_token' => null,
            ],
            [
                'id'             => 7, 
                'name'           => 'Cepi sentoso',
                'email'          => 'cepi@cepi.com',
                'password'       => bcrypt('cepi'),
                'remember_token' => null,
            ]

        ];

        User::insert($users);
    }
}
