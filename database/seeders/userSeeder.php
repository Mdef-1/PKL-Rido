<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Ensure the correct namespace is used

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'jokowi',
            'email' => 'jokowi@gmail.com',
            'password' => bcrypt('password'), // Use bcrypt for password hashing
            'is_admin' => true, // Assuming you have an is_admin field

        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'janda@gmail.com',
            'password' => bcrypt('password'), // Use bcrypt for password hashing
            'is_admin' => true, // Assuming you have an is_admin field
        
        ]);

        User::create([
            'name' => 'John Doe',
            'email' => 'jondoe@gmail.com',
            'password' => bcrypt('password'), // Use bcrypt for password hashing
            'is_admin' => true, // Assuming you have an is_admin field
           
        ]);

    }
}
