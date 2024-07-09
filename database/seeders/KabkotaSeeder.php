<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabkotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kabkotas')->insert([
            ['id' => 1, 'nama' => 'Kabkota A', 'latitude' => -6.200000, 'longitude' => 106.816666, 'provinsi_id' => 1],
            ['id' => 2, 'nama' => 'Kabkota B', 'latitude' => -7.250445, 'longitude' => 112.768845, 'provinsi_id' => 2],
            // Tambahkan data kabkota lainnya jika diperlukan
        ]);
    }
}
