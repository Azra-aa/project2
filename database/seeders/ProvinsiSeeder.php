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
            ['id' => 1, 'nama' => 'DKI Jakarta', 'ibukota' => 'Jakarta Pusat', 'latitude' => -7.250445, 'longitude' => 112.768845],
            ['id' => 2, 'nama' => 'Jawa Barat', 'ibukota' => 'Bandung', 'latitude' => -6.200000, 'longitude' => 106.816666],
            ['id' => 3, 'nama' => 'Jawa Tengah', 'ibukota' => 'Semarang', 'latitude' => -2.600000, 'longitude' => 108.616666],
            // Tambahkan data provinsi lainnya jika diperlukan
        ]);
    }
}