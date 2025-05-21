<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();
        return response()->json([
            'status' => 'Data berhasil ditampilkan',
            'data' => $genres
        ], 200);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'description => required'
        ]);

        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        
        return response()->json([
            'status' => 'Data berhasil ditambahkan',
            'data' => $genre
        ], 201);
    }
}
