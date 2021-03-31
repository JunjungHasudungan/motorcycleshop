<?php

use Illuminate\Database\Seeder;
use App\Models\Courses;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'id'        => '1',
                'name'      => 'Object Oriented Programming ',
                'point'     => '20',
                'major_id'  => '1'
            ],
            [
                'id'        => '2',
                'name'      => 'Data Structure',
                'point'     => '30',
                'major_id'  => '1'
            ],
            [
                'id'        => '3',
                'name'      => 'Networking Fundamental',
                'point'     => '20',
                'major_id'  => '2'
            ],
            [
                'id'        => '4',
                'name'      => 'Networking Fundamental',
                'point'     => '30',
                'major_id'  => '2'
            ],
            [
                'id'        => '5',
                'name'      => 'Project Management Professiona',
                'point'     => '40',
                'major_id'  => '3'
            ],
            [
                'id'        => '6',
                'name'      => 'Unified Modelling Language',
                'point'     => '20',
                'major_id'  => '3'
            ],
            [
                'id'        => '7',
                'name'      => 'Java Fundamental',
                'point'     => '30',
                'major_id'  => '1'
            ],
            [
                'id'        => '8',
                'name'      => 'Infrastructure Design',
                'point'     => '30',
                'major_id'  => '2'
            ],
            [
                'id'        => '9',
                'name'      => 'Network and Security',
                'point'     => '20',
                'major_id'  => '2'
            ],
            ];

        Courses::insert($courses);
    }
}
