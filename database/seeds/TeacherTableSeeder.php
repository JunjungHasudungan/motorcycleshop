<?php

use Illuminate\Database\Seeder;
use App\Models\Teacher;
class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            [
                'id'                => '1',
                'id_teacher'        => 'T701',
                'name'              => 'Antik Haya',
                'birth_of_day'      => '12 November 1988',
                'birth_of_pleace'   => 'Bandung',
                'gender'            => 'Perempuan ',
                'slug'              => 'Antik-Haya',
                'role_id'           => '1'
            ],
            [
                'id'                => '2',
                'id_teacher'        => 'T808',
                'name'              => 'Cahya Subroto',
                'birth_of_day'      => ' 9 April 1987',
                'birth_of_pleace'   => 'Jakarta',
                'gender'            => 'Laki-laki',
                'slug'              => 'Cahya-Subroto',
                'role_id'           => '1'
            ],
            [
                'id'                => '3',
                'id_teacher'        => 'T949',
                'name'              => 'Martine Putra',
                'birth_of_day'      => '6 Agusutus 1987',
                'birth_of_pleace'   => 'Jakarta',
                'gender'            => 'Laki-laki',
                'slug'              => 'Martine-Putra',
                'role_id'           => '1'
            ],
            [
                'id'                => '4',
                'id_teacher'        => 'T707',
                'name'              => 'Fetra Fdiyanto',
                'birth_of_day'      => '3 Juni 1984',
                'birth_of_pleace'   => 'Semarang',
                'gender'            => 'Laki-laki ',
                'slug'              => 'Fetra-Fdiyanto',
                'role_id'           => '1'
            ],
            [
                'id'                => '5',
                'id_teacher'        => 'T856',
                'name'              => 'Novi-Yanti',
                'birth_of_day'      => '5 January 1992 ',
                'birth_of_pleace'   => 'Jakarta',
                'gender'            => 'Perempuan',
                'slug'              => 'Novi-Yanti',
                'role_id'           => '1'
            ],
            [
                'id'                => '6',
                'id_teacher'        => 'T555',
                'name'              => 'Ive Silviana',
                'birth_of_day'      => '20 December 1989 ',
                'birth_of_pleace'   => 'Bangka Belitung',
                'gender'            => 'Perempuan ',
                'slug'              => 'Ive-Silviana',
                'role_id'           => '1'
            ],
        ];

        Teacher::insert($teachers);
    }
}
