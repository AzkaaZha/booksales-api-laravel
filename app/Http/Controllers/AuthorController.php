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

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'photo',
            'bio'
        ]);

        $authors = Author::create($request->all());
        return response()->json([
            'status' => 'Data berhasil ditambahkan',
            'data' => $authors
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $authors = Author::find($id);
        if (!$authors) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'photo',
            'bio'
        ]);

        $authors->update($validated);
        return response()->json($authors);
    }

    public function show($id)
    {
        $authors = Author::find($id);
        if (!$authors) {
            return response()->json(['message' => 'Author not found'], 404);
        }
        return $authors;
    }

    public function destroy($id)
    {
        $authors = Author::find($id);
        if (!$authors) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $authors->delete();
        return response()->json(['message' => 'Author deleted']);
    }

    
}
