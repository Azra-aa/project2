<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris')->insert([
            ['id' => 1, 'nama' => 'Kategori A'],
            ['id' => 2, 'nama' => 'Kategori B'],
            ['id' => 3, 'nama' => 'Kategori C'],
        ]);
    }
}