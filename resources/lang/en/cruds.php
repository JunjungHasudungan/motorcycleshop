<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'           => [
        'title_student'          => 'Student',
        'title_teacher'          => 'Teacher',
        'title_singular' => 'User',
        'fields'         => [
            'no'                       => 'No',
            'student'                  => 'Student',
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'nim'                      => 'NIM',
            'name'                     => 'Name',
            'birth_of_day'             => 'Birth of Day',
            'list'                     => 'Detail of',
            'birth_of_place'           => 'Birth of Place',
            'gender'                   => 'Gender',
            'total_point'              => 'Total Point',
            'registrasionDate'         => 'Tanggal Pendaftaran',
            'period'                   => 'Periode',
            'option'                   => 'Opsi',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'majors'        => [
        'title'             => 'Jurusan',
        'title_singular'    => 'Jurusan',
        'fields'     => [
            'id'        => 'ID',
            'no'        => 'No',
            'name'      => 'Nama Jurusan',
            'cost'      => 'Estimasi Biaya',
            'option'    => 'OPSI'            
        ]
    ],
    'contract'       => [
        'title'          => 'Contracts',
        'title_singular' => 'Contract',
        'fields'         => [
            'id'                   => 'ID',
            'no'                   => 'No',
            'id_helper'            => ' ',
            'client'               => 'Client',
            'client_helper'        => ' ',
            'contract_date'        => 'Contract Date',
            'contract_date_helper' => ' ',
            'subject'              => 'Subject',
            'subject_helper'       => ' ',
            'full_text'            => 'Full Text',
            'full_text_helper'     => ' ',
            'is_signed'            => 'Is Signed',
            'is_signed_helper'     => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated at',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted at',
            'deleted_at_helper'    => ' ',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'role'                     => 'Role',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'sport'          => [
        'title'          => 'Sports',
        'title_singular' => 'Sport',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'region'         => [
        'title'          => 'Regions',
        'title_singular' => 'Region',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'charity'        => [
        'title'          => 'Charities',
        'title_singular' => 'Charity',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'event'          => [
        'title'          => 'Events',
        'title_singular' => 'Event',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'description'        => 'Description',
            'description_helper' => '',
            'start_time'         => 'Start Time',
            'start_time_helper'  => '',
            'end_time'           => 'End Time',
            'end_time_helper'    => '',
            'sport'              => 'Sport',
            'sport_helper'       => '',
            'region'             => 'Region',
            'region_helper'      => '',
            'charity'            => 'Charity',
            'charity_helper'     => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
            'created_by'         => 'Created By',
            'created_by_helper'  => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'slug'               => 'Slug',
            'slug_helper'        => '',
        ],
    ],
    'post'           => [
        'title'          => 'Posts',
        'title_singular' => 'Post',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'full_text'         => 'Full Text',
            'full_text_helper'  => '',
            'sport'             => 'Sport',
            'sport_helper'      => '',
            'event'             => 'Event',
            'event_helper'      => '',
            'published'         => 'Published',
            'published_helper'  => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'photo'             => 'Photo',
            'photo_helper'      => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
        ],
    ],
    'biographies'       => [
        'title'         => 'Biografi',
        'fields'        => [
            'id'                => 'ID',
            'birthdayOfPlace'   => 'Tempat Lahir',
            'birthdayOfDate'    => 'Tanggal Lahir', 
            'domicile'          => 'Domisi', 
            'gender'            => 'Gender',
        ]
    ],
    'motor'           => [
        'title'          => 'Motors',
        'title_singular' => 'Motor',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'full_text'         => 'Full Text',
            'full_text_helper'  => '',
            'motor'             => 'Motor',
            'sport_helper'      => '',
            'event'             => 'Event',
            'event_helper'      => '',
            'published'         => 'Published',
            'published_helper'  => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
            'photo'             => 'Photo',
            'photo_helper'      => '',
            'slug'              => 'Slug',
            'slug_helper'       => '',
        ],
    ],
];