<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'author_id'   => 1,
                'title'       => 'Book Title 1',
                'description' => 'Description for Book 1',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'author_id'   => 2,
                'title'       => 'Book Title 2',
                'description' => 'Description for Book 2',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'author_id'   => 3,
                'title'       => 'Book Title 3',
                'description' => 'Description for Book 3',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'author_id'   => 4,
                'title'       => 'Book Title 4',
                'description' => 'Description for Book 4',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'author_id'   => 5,
                'title'       => 'Book Title 5',
                'description' => 'Description for Book 5',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
        ]);
    }
}
