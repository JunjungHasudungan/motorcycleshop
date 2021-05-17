<?php

use Illuminate\Database\Seeder;
use App\Models\Sparepart;

class SparepartTableSeeder extends Seeder
{

    
    public function run()
    {
        $pareparts = [
            [
                'id'            => '1',
                'id_sparepart'  => '12394-K59-A11',
                'amount'        => 3,
                // 'motor_id'      => '6',
                'name'          => 'COVER COMP',
                'price'         => '35000',
                'slug'          => null,
            ],
            [
                'id'            => '2',
                'id_sparepart'  => '12310-KZR-700',
                'amount'        => 3,
                // 'motor_id'      => '2',
                'name'          => 'CYLINDER HEAD',
                'price'         => '300000',
                'slug'          => null,
            ],
            [
                'id'            => '3',
                'id_sparepart'  => '12391-KZR-600',
                'amount'        => 3,
                // 'motor_id'      => '11',
                'name'          => 'CYLINDER HEAD COVER',
                'slug'          => null,
                'price'         => '450000'
            ],
            [
                'id'            => '4',
                'id_sparepart'  => '95701-06022-00',
                'amount'        => 3,
                // 'motor_id'      => '5',
                'name'          => 'BOLT, FLANGE, 6X22',
                'slug'          => null,
                'price'         => '35000'
            ],
            [
                'id'            => '5',
                'id_sparepart'  => '12010-K36-T00',
                'amount'        => 3,
                // 'motor_id'      => '3',
                'name'          => 'HEAD ASSY., CYLINDER',
                'slug'          => null,
                'price'         => '560000'
            ],
            [
                'id'            => '6',
                'id_sparepart'  => '12204-KWN-P00',
                'amount'        => 3,
                // 'motor_id'      => '6',
                'name'          => 'GUIDE, VALVE(O.S.)',
                'slug'          => null,
                'price'         => '25000'
            ],
            [
                'id'            => '7',
                'id_sparepart'  => '12251-KZY-701',
                'amount'        => 3,
                // 'motor_id'      => '7',
                'name'          => 'CYLINDER HEAD',
                'slug'          => null,
                'price'         => '300000'
            ],
            [
                'id'            => '8',
                'id_sparepart'  => '17111-K59-A10',
                'amount'        => 3,
                // 'motor_id'      => '8',
                'name'          => 'PIPE',
                'slug'          => null,
                'price'         => '100000'
            ],
            [
                'id'            => '9',
                'id_sparepart'  => '17119-KZY-700',
                'amount'        => 3,
                // 'motor_id'      => '9',
                'name'          => 'CYLINDER HEAD',
                'slug'          => null,
                'price'         => '30500'
            ],
            [
                'id'            => '10',
                'id_sparepart'  => '12251-KZY-701',
                'amount'        => 3,
                // 'motor_id'      => '6',
                'name'          => 'INSULATOR',
                'slug'          => null,
                'price'         => '40000'
            ],
            [
                'id'            => '11',
                'id_sparepart'  => '06430KZL930',
                'amount'        => 3,
                // 'motor_id'      => '13',
                'name'          => 'Shoe set Brake',
                'slug'          => null,
                'price'         => ' 55000'
            ],
            [
                'id'            => '12',
                'id_sparepart'  => '22110GFM960',
                'amount'        => 3,
                // 'motor_id'      => '14',
                'name'          => 'Face Comp, Movable Drive (Rumah Roler)',
                'slug'          => null,
                'price'         => '  68000'
            ],
            [
                'id'            => '14',
                'id_sparepart'  => '9820041000',
                'amount'        => 3,
                // 'motor_id'      => '7',
                'name'          => 'Sikring (Fuse Mini 10A)',
                'slug'          => null,
                'price'         => '50000'
            ]
        ];

        Sparepart::insert($pareparts);
    }
}
