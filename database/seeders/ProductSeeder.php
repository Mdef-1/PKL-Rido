<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        product::create([
            'nama' => 'Laptop favorit pak jokowi',
            'slug' => 'laptop  favorit-pak-jokowi',
            'harga' => 15000000,
            'deskripsi' => 'Laptop keren kesukaan pak jokowi.',
            'gambar' => 'laptop.jpg',
            'stok' => 10,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Kopi biji aku',
            'slug' => 'kopi-biji-aku',
            'harga' => 20000,
            'deskripsi' => 'Kopi premium dari biji siapa?.',
            'gambar' => 'kopi.jpg',
            'stok' => 50,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Pensil punya John',
            'slug' => 'pensil-punya-john',
            'harga' => 5000,
            'deskripsi' => 'Pensil punya john.',
            'gambar' => 'pensil.jpg',
            'stok' => 100,
            'category_id' => 3, 
        ]);
        

        product::create([
            'nama' => 'Bekicot hitam asli magetan',
            'slug' => 'bekicot-hitam-asli-magetan',
            'harga' => 15000,
            'deskripsi' => 'jadi hitam rill  .',
            'gambar' => 'cemilan.jpg',
            'stok' => 30,
            'category_id' => 4, 
        ]);
        
    }
}
