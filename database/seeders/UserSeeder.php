<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'admin', 'email' => 'admin@gmail.com', 'password'=>'$2y$12$Fx6TQTbIXmkfNBZ22MDvt.7L45dUvDqvArV5m0BhG0zsbxIRmGFU.',
            'remember_token' => '4MU2cXxJ1KcxPFNrYbhSkWwsH6MCzxvsDcwm64zllVwmMPrJj7rjTNgada82', 
            'created_at'=>'2024-07-09 15:34:38', 'updated_at'=>'2024-07-09 15:34:38'],
        ]);
    }
}
