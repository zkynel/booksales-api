<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'Author One', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Author Two', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Author Three', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Author Four', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Author Five', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
