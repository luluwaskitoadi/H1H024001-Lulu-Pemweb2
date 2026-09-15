<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $daftar = [
            ['kode' => 'TK245001', 'nama' => 'Sistem Kendali', 'sks' => 3, 'semester' => 5],
            ['kode' => 'TK245002', 'nama' => 'Keamanan Jaringan Komputer', 'sks' => 2, 'semester' => 5],
            ['kode' => 'TK245004', 'nama' => 'Internet of Things', 'sks' => 3, 'semester' => 5],
            ['kode' => 'TK245006', 'nama' => 'Etika Profesi', 'sks' => 2, 'semester' => 5],
            ['kode' => 'TK245007', 'nama' => 'Metode Numerik', 'sks' => 2, 'semester' => 5],
        ];

        foreach ($daftar as $item) {
            Matakuliah::create($item);
        }
    }
}