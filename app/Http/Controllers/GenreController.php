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
            'description' => 'required|string'
        ]);

        $genres = Genre::create([
            'name' => $request->name,
            'description' => $request->description
        ]);
        
        return response()->json([
            'status' => 'Data berhasil ditambahkan',
            'data' => $genres
        ], 201);
    }


    public function update(Request $request, $id)
    {
        $genres = Genre::find($id);
        if (!$genres) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $genres->update($validated);
        return response()->json($genres);
    }

    public function show($id)
    {
        $genres = Genre::find($id);
        if (!$genres) {
            return response()->json(['message' => 'Genre not found'], 404);
        }
        return $genres;
    }

    public function destroy($id)
    {
        $genres = Genre::find($id);
        if (!$genres) {
            return response()->json(['message' => 'Genre not found'], 404);
        }

        $genres->delete();
        return response()->json(['message' => 'Genre deleted']);
    }

    
}
