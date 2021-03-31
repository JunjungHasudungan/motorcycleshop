<?php

use Illuminate\Database\Seeder;
use App\Models\SparePart;

class SparepartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pareparts = [
            [
                'id'            => '1',
                'id_sparepart'  => '12394-K59-A11',
                'motor_id'      => '6',
                'name'          => 'COVER COMP',
                'price'         => '0'
            ],
            [
                'id'            => '2',
                'id_sparepart'  => '12310-KZR-700',
                'motor_id'      => '6',
                'name'          => 'CYLINDER HEAD',
                'price'         => '0'
            ],
            [
                'id'            => '3',
                'id_sparepart'  => '12391-KZR-600',
                'motor_id'      => '6',
                'name'          => 'CYLINDER HEAD COVER',
                'price'         => '0'
            ],
            [
                'id'            => '4',
                'id_sparepart'  => '95701-06022-00',
                'motor_id'      => '6',
                'name'          => 'BOLT, FLANGE, 6X22',
                'price'         => '0'
            ],
            [
                'id'            => '5',
                'id_sparepart'  => '12010-K36-T00',
                'motor_id'      => '6',
                'name'          => 'HEAD ASSY., CYLINDER',
                'price'         => '0'
            ],
            [
                'id'            => '6',
                'id_sparepart'  => '12204-KWN-P00',
                'motor_id'      => '6',
                'name'          => 'GUIDE, VALVE(O.S.)',
                'price'         => '0'
            ],
            [
                'id'            => '7',
                'id_sparepart'  => '12251-KZY-701',
                'motor_id'      => '6',
                'name'          => 'CYLINDER HEAD',
                'price'         => '0'
            ],
            [
                'id'            => '8',
                'id_sparepart'  => '17111-K59-A10',
                'motor_id'      => '6',
                'name'          => 'PIPE',
                'price'         => '0'
            ],
            [
                'id'            => '9',
                'id_sparepart'  => '17119-KZY-700',
                'motor_id'      => '6',
                'name'          => 'CYLINDER HEAD',
                'price'         => '0'
            ],
            [
                'id'            => '10',
                'id_sparepart'  => '12251-KZY-701',
                'motor_id'      => '6',
                'name'          => 'INSULATOR',
                'price'         => '0'
            ],
            [
                'id'            => '11',
                'id_sparepart'  => '06430KZL930',
                'motor_id'      => '13',
                'name'          => 'Shoe set Brake',
                'price'         => ' 55000'
            ],
            [
                'id'            => '12',
                'id_sparepart'  => '22110GFM960',
                'motor_id'      => '14',
                'name'          => 'Face Comp, Movable Drive (Rumah Roler)',
                'price'         => '  68000'
            ],
            [
                'id'            => '14',
                'id_sparepart'  => '9820041000',
                'motor_id'      => '7',
                'name'          => 'Sikring (Fuse Mini 10A)',
                'price'         => '5000'
            ]
        ];

        SparePart::insert($pareparts);
    }
}
