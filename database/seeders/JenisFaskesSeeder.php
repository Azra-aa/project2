<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisFaskesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_faskes')->insert([
            ['id' => 1, 'nama' => 'Rumah Sakit'],
            ['id' => 2, 'nama' => 'Klinik'],
            // Tambahkan data jenis faskes lainnya jika diperlukan
        ]);
    }
}
