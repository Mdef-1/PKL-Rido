<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; // Ensure the correct namespace is used

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        category::create([
            'nama' => 'alat elektronik',
            'slug' => 'alat-elektronik',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        category::create([
            'nama' => 'minuman',
            'slug' => 'minuman',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        category::create([
            'nama' => 'alat tulis',
            'slug' => 'alat-tulis',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        category::create([
            'nama' => 'snack',
            'slug' => 'snack',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
