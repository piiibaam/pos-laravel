<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@gmail.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email' => 'pedro@gmail.com',
                'phone' => '09191234567',
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana@gmail.com',
                'phone' => '09201234567',
            ],
            [
                'full_name' => 'Mark Bautista',
                'email' => 'mark@gmail.com',
                'phone' => '09211234567',
            ],
        ]);

        DB::table('users')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('password123'),
                'full_name' => 'Admin User',
                'avatar' => null,
            ],
            [
                'username' => 'juan.staff',
                'password' => Hash::make('password123'),
                'full_name' => 'Juan Staff',
                'avatar' => null,
            ],
            [
                'username' => 'maria.staff',
                'password' => Hash::make('password123'),
                'full_name' => 'Maria Staff',
                'avatar' => null,
            ],
            [
                'username' => 'pedro.staff',
                'password' => Hash::make('password123'),
                'full_name' => 'Pedro Staff',
                'avatar' => null,
            ],
            [
                'username' => 'ana.staff',
                'password' => Hash::make('password123'),
                'full_name' => 'Ana Staff',
                'avatar' => null,
            ],
        ]);
    }
}