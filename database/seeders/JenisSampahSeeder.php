<?php

namespace Database\Seeders;

use App\Models\JenisSampah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisSampahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        JenisSampah::create([
            'name' => 'Plastik',
            'description' => 'plastik',
            'harga' => 1000
        ]);
        JenisSampah::create([
            'name' => 'Kertas',
            'description' => 'kertas',
            'harga' => 500
        ]);
        JenisSampah::create([
            'name' => 'Kaca',
            'description' => 'kaca',
            'harga' => 750
        ]);
        JenisSampah::create([
            'name' => 'Logam',
            'description' => 'logam',
            'harga' => 1250
        ]);
        JenisSampah::create([
            'name' => 'Organik',
            'description' => 'organik',
            'harga' => 250
        ]);
    }
}
