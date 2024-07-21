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
                'email' => 'azrahealth@gmail.com',
                'kabkota_id' => 2, // Pastikan id ini ada di tabel kabkotas
                'rating' => 68,
                'latitude' => -6.355303,
                'longitude' => 106.842564,
                'jenis_faskes_id' => 2, // Pastikan id ini ada di tabel jenis_faskes
                'kategori_id' => 1, // Pastikan id ini ada di tabel kategoris
            ], 
            [
                'id' => 2,
                'nama' => 'Bani Health',
                'nama_pengelola' => 'Bani',
                'alamat' => 'JL. Akses gundar Kelapa Tiga',
                'website' => 'bani.com',
                'email' => 'banihealth@gmail.com',
                'kabkota_id' => 2, // Pastikan id ini ada di tabel kabkotas
                'rating' => 60,
                'latitude' => -6.355303,
                'longitude' => 106.842564,
                'jenis_faskes_id' => 1, // Pastikan id ini ada di tabel jenis_faskes
                'kategori_id' => 2, // Pastikan id ini ada di tabel kategoris
            ],
        ]);
    }
}