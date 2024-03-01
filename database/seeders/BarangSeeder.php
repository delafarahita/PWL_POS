<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Hijab Segi Empat Polos',
                'harga_beli' => 50000,
                'harga_jual' => 75000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Hijab Instan Motif Bunga',
                'harga_beli' => 60000,
                'harga_jual' => 90000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Dress Motif Garis-garis',
                'harga_beli' => 120000,
                'harga_jual' => 150000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Dress Polkadot Warna Pastel',
                'harga_beli' => 100000,
                'harga_jual' => 130000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Kemeja Katun Putih',
                'harga_beli' => 75000,
                'harga_jual' => 100000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Kemeja Flanel Kotak-kotak',
                'harga_beli' => 90000,
                'harga_jual' => 120000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Celana Panjang Katun',
                'harga_beli' => 80000,
                'harga_jual' => 110000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Jam Tangan',
                'harga_beli' => 30000,
                'harga_jual' => 50000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Topi',
                'harga_beli' => 25000,
                'harga_jual' => 40000,
            ],
        ];
        DB::table('m_barangs')->insert($data);
    }
}
