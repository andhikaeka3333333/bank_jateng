<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
  // Tambahkan Admin Default
        User::create([
            'name' => 'Admin_Bank_Jateng',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'jenis_kelamin' => 'Laki-laki',
            'nik' => '1234567891234567',
            'no_hp' => '12345678910',
            'alamat' => 'jl indonesia',
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // Tambahkan user biasa (opsional)
        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user12345'),
            'jenis_kelamin' => 'Laki-laki',
            'nik' => '1234567891234568',
            'no_hp' => '12345678911',
            'alamat' => 'jl indonesia 12',
            'role' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
