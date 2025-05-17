<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::insert([
            [
                'name' => 'J.K. Rowling',
                'photo' => 'J.K. Rowling.jpg',
                'bio' => 'J.K. Rowling is a British author, best known as the author of the Harry Potter book series. She is also the author of the New York Times bestselling children\'s series The Hunger Games.'
            ],
            [
                'name' => 'J.R.R. Tolkien',
                'photo' => 'J.R.R. Tolkien.jpg',
                'bio' => 'J.R.R. Tolkien is a British author, best known as the author of the Lord of the Rings trilogy.'
            ],
            [
                'name' => 'Stephen King',
                'photo' => 'Stephen King.jpg',
                'bio' => 'Stephen King is an American author, best known for writing the horror novel The Shining.'
            ],
            [
                'name' => 'George Orwell',
                'photo' => 'George Orwell.jpg',
                'bio' => 'George Orwell is an English novelist, best known for writing the dystopian novel 1984.'
            ],
            [
                'name' => 'Jane Austen',
                'photo' => 'Jane Austen.jpg',
                'bio' => 'Jane Austen is an English novelist, best known for her novel Pride and Prejudice.'
            ]
        ]);
    }
}
