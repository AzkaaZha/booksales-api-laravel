<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => 1,
            'name' => 'J.K. Rowling',
        ],
        [
            'id' => 2,
            'name' => 'George R.R. Martin',
        ],
        [
            'id' => 3,
            'name' => 'J.R.R. Tolkien',
        ],
        [
            'id' => 4,
            'name' => 'Agatha Christie',
        ],
        [
            'id' => 5,
            'name' => 'Stephen King',
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
