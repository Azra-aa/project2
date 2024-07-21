<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinsis')->insert([
            ['id' => 1, 'nama' => 'DKI Jakarta', 'ibukota' => 'Jakarta Pusat', 'latitude' => -6.17511, 'longitude' => 106.865036],
            ['id' => 2, 'nama' => 'Jawa Barat', 'ibukota' => 'Bandung', 'latitude' => -6.917464, 'longitude' => 107.619125],
            ['id' => 3, 'nama' => 'Jawa Tengah', 'ibukota' => 'Semarang', 'latitude' => -7.005145, 'longitude' => 110.438126],
            ['id' => 4, 'nama' => 'Jawa Timur', 'ibukota' => 'Surabaya', 'latitude' => -7.005145, 'longitude' => 110.438126],
            // Tambahkan data provinsi lainnya jika diperlukan
        ]);
    }
}