<?php

namespace App\Database\Seeds;

use App\Models\Pengguna12200409;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
        [
            'nama'      => 'NovalFurqon',
            'password'  => md5('12200409')
        ],
        [
            'nama'      => 'creator',
            'password'  => md5('23456')
        ],
        [
            'nama'      => 'marketing',
            'password'  => md5('34567')
        ]
    ];
        $p = new Pengguna12200409();
        $p->insertBatch($data);
    }
}