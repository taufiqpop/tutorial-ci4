<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $data = [
                [
                    'nama'          => 'Taufiq Pop',
                    'alamat'        => 'Klaten',
                    'created_at'    => Time::now(),
                    'updated_at'    => Time::now(),
                ],
                [
                    'nama'          => 'Lala',
                    'alamat'        => 'Klaten',
                    'created_at'    => Time::now(),
                    'updated_at'    => Time::now(),
                ],
                [
                    'nama'          => 'Nabila',
                    'alamat'        => 'Sukoharjo',
                    'created_at'    => Time::now(),
                    'updated_at'    => Time::now(),
                ],
            ];

            // Simple Queries
            // $this->db->query('INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)', $data);

            // Using Query Builder
            $this->db->table('orang')->insert($data);
            // $this->db->table('orang')->insertBatch($data);
        }
    }
}
