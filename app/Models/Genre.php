<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'id' => 1,
            'name' => 'Action',
        ],
        [
            'id' => 2,
            'name' => 'Adventure',
        ],
        [
            'id' => 3,
            'name' => 'Comedy',
        ],
        [
            'id' => 4,
            'name' => 'Drama',
        ],
        [
            'id' => 5,
            'name' => 'Fantasy',
        ],
        [
            'id' => 6,
            'name' => 'Horror',
        ],
    ];

    public function getGenres()
    {
        return $this->genres;
    }
}
