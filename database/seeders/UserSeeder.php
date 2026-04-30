<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@envyra.com',
            'username' => 'admin',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'phone' => '081234567890',
            'alamat' => 'surabaya'
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user1@gmail.com',
            'username' => 'user',
            'password' => bcrypt('password'),
            'role' => 'user',
            'phone' => '081234567891',
            'alamat' => 'Surabaya'
        ]);

        User::create([
            'name' => 'Kurir',
            'email' => 'kurir@gmail.com',
            'username' => 'kurir',
            'password' => bcrypt('password'),
            'role' => 'kurir',
            'phone' => '081234567892',
            'alamat' => 'Sidoarjo'
        ]);
    }
}
