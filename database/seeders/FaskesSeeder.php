<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaskesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faskes')->insert([
            [
                'id' => 1,
                'nama' => 'Azra Health',
                'nama_pengelola' => 'Azra',
                'alamat' => 'JL. Akses UI Kelapa Dua',
                'website' => 'azraahmad.com',
                'email' => 'aaa@gmail.com',
                'kabkota_id' => 1, // Pastikan id ini ada di tabel kabkotas
                'rating' => 99,
                'latitude' => 0,
                'longitude' => 0,
                'jenis_faskes_id' => 2, // Pastikan id ini ada di tabel jenis_faskes
                'kategori_id' => 1, // Pastikan id ini ada di tabel kategoris
            ],
            [
                'id' => 2,
                'nama' => 'Bani Health',
                'nama_pengelola' => 'Bani',
                'alamat' => 'JL. Akses gundar Kelapa Dua',
                'website' => 'bani.com',
                'email' => 'bbb@gmail.com',
                'kabkota_id' => 2, // Pastikan id ini ada di tabel kabkotas
                'rating' => 66,
                'latitude' => 1.11,
                'longitude' => 1.11,
                'jenis_faskes_id' => 1, // Pastikan id ini ada di tabel jenis_faskes
                'kategori_id' => 2, // Pastikan id ini ada di tabel kategoris
            ],
        ]);
    }
}