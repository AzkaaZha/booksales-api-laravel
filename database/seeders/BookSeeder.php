<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'description' => 'The first book in the Harry Potter series.',
                'price' => 50000,
                'stock' => 10,
                'cover_photo' => 'Harry Potter and the Sorcerer\'s Stone.jpg',
                'author_id' => 1,
                'genre_id' => 1,
            ],
            [
                'title' => 'The Hunger Games',
                'description' => 'The first book in the Hunger Games series.',
                'price' => 50000,
                'stock' => 10,
                'cover_photo' => 'The Hunger Games.jpg',
                'author_id' => 1,
                'genre_id' => 1,
            ],
            [
                'title' => 'The Lord of the Rings',
                'description' => 'The first book in the Lord of the Rings series.',
                'price' => 50000,
                'stock' => 10,
                'cover_photo' => 'The Lord of the Rings.jpg',
                'author_id' => 2,
                'genre_id' => 1,
            ],
            [
                'title' => 'The Shining',
                'description' => 'The first book in the The Shining series.',
                'price' => 50000,
                'stock' => 10,
                'cover_photo' => 'The Shining.jpg',
                'author_id' => 3,
                'genre_id' => 1,
            ],
            [
                'title' => '1984',
                'description' => 'The first book in the 1984 series.',
                'price' => 50000,
                'stock' => 10,
                'cover_photo' => '1984.jpg',
                'author_id' => 4,
                'genre_id' => 1,
            ]
        ]);
    }
}
