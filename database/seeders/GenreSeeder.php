<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::insert ([
            [
                'name' => 'Fiction',
                'description' => 'Fiction'
            ],
            [
                'name' => 'Non-Fiction',
                'description' => 'Non-Fiction'
            ],
            [
                'name' => 'Biography',
                'description' => 'Biography'
            ],
            [
                'name' => 'History',
                'description' => 'History'
            ],
            [
                'name' => 'Self-Help',
                'description' => 'Self-Help'
            ]
        ]);
    }
}
