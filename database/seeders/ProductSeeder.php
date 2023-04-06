<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            'nama' => 'Minyak Goreng',
            'harga_barang' => '30000',
            'deskripsi' => 'lemak',
            'created_ad' => date('Y-m-d H:i:s')
        ]);
        DB::table('product')->insert([
            'nama' => 'Minyak Kemiri',
            'harga_barang' => '50000',
            'deskripsi' => 'goreng',
            'created_ad' => date('Y-m-d H:i:s')
        ]);
        DB::table('product')->insert([
            'nama' => 'Minyak Zaitun',
            'harga_barang' => '70000',
            'deskripsi' => 'minyak',
            'created_ad' => date('Y-m-d H:i:s')
        ]);
    }
}
