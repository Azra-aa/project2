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
            ['id' => 1, 'nama' => 'Jakarta Selatan', 'latitude' => -6.232970, 'longitude' => 106.834572, 'provinsi_id' => 1],
            ['id' => 2, 'nama' => 'Depok', 'latitude' => -6.402484, 'longitude' => 106.794243, 'provinsi_id' => 2],
            ['id' => 3, 'nama' => 'Salatiga', 'latitude' => -7.330523, 'longitude' => 110.508438, 'provinsi_id' => 3],
            ['id' => 4, 'nama' => 'Pasuruan', 'latitude' => -7.644872, 'longitude' => 112.903297, 'provinsi_id' => 4],
        ]);
    }
}
