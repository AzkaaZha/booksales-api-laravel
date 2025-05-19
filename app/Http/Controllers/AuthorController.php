<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all();
        return response()->json([
            'status' => 'Data berhasil ditampilkan',
            'data' => $authors
        ], 200);
    }
}
