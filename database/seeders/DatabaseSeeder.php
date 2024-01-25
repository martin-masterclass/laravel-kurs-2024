<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory()->create([
             'name' => 'Martin',
             'email' => 'mkrebseberth@gmail.com',
             'password' => bcrypt('bla123'),
             'role' => 'admin',
         ]);
         \App\Models\User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
        ]);
    }
}
