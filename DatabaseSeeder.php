<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Anggota::create([
            'nama' => 'daffa',
            'hp' => '08123456789',
        ]);
        Anggota::create([
            'nama' => 'iwan',
            'hp' => '08123456781',
        ]);
        Anggota::create([
            'nama' => 'raka',
            'hp' => '08123456782',
        ]);
    }
}
