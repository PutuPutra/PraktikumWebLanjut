<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2057051016',
                'nama'    => 'Putu Putra Eka Persada',
                'alamat'    => 'Rama Dewa',
                'created_at'    => Time::now(),

            ],
            [
                'npm' => '2017051001',
                'nama'    => 'Ervan Chodry',
                'alamat'    => 'Metro',
                'created_at'    => Time::now(),

            ],
            [
                'npm' => '2017051050',
                'nama'    => 'Joy Hans',
                'alamat'    => 'Kampung Baru',
                'created_at'    => Time::now(),

            ],
            [
                'npm' => '2017051051',
                'nama'    => 'Joy Hans Sinaga',
                'alamat'    => 'Kampung Lama',
                'created_at'    => Time::now(),

            ]

        ];

        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
