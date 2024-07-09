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
            ['id' => 1, 'nama' => 'Provinsi A', 'ibukota' => 'Ibukota A', 'latitude' => -6.200000, 'longitude' => 106.816666],
            ['id' => 2, 'nama' => 'Provinsi B', 'ibukota' => 'Ibukota B', 'latitude' => -7.250445, 'longitude' => 112.768845],
            // Tambahkan data provinsi lainnya jika diperlukan
        ]);
    }
}