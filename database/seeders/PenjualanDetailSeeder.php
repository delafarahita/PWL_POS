<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Transaksi Penjualan 1
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 75000,
                'jumlah' => 2, 
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 2,
                'harga' => 90000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 3,
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 150000,
                'jumlah' => 3,
            ],

            // Transaksi Penjualan 2
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 130000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 5,
                'penjualan_id' => 2,
                'barang_id' => 5,
                'harga' => 100000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => 120000,
                'jumlah' => 1,
            ],

            // Transaksi Penjualan 3
            [
                'detail_id' => 7,
                'penjualan_id' => 3,
                'barang_id' => 7,
                'harga' => 200000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => 110000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 9,
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 50000,
                'jumlah' => 3,
            ],
        ];
        DB::table('t_penjualan_details')->insert($data);
    }
}
