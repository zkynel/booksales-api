<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'name'       => 'Fantasy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Science Fiction',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Romance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Horror',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Mystery',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
