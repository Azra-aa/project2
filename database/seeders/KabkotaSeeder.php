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
            ['id' => 1, 'nama' => 'Jakarta Selatan', 'latitude' => -6.200000, 'longitude' => 106.816666, 'provinsi_id' => 1],
            ['id' => 2, 'nama' => 'Depok', 'latitude' => -7.250445, 'longitude' => 112.768845, 'provinsi_id' => 2],
            ['id' => 3, 'nama' => 'Salatiga', 'latitude' => -2.750445, 'longitude' => 117.268845, 'provinsi_id' => 3],
        ]);
    }
}
