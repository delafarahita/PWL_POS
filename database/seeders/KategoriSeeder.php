<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'KTG001',
                'kategori_nama' => 'Hijab',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'KTG002',
                'kategori_nama' => 'Dress',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'KTG003',
                'kategori_nama' => 'Kemeja',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'KTG004',
                'kategori_nama' => 'Celana',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'KTG005',
                'kategori_nama' => 'Aksesoris',
            ],
        ];
        DB::table('m_kategoris')->insert($data);
    }
}
