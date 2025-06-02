<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user', 'book')->get();

        if($transactions->isEmpty()) {
            return response()->json([
                'success' => true,
                'status' => 'Data tidak ditemukan'
            ], 200);
        }

        return response()->json([
            'success' => true,
            'status' => 'Data berhasil ditampilkan',
            'data' => $transactions
        ]);
    }

    public function store(Request $request)
    {
        // validate
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator -> fails()) {
            return response()->json([
                'success' => false,
                'status' => 'Data tidak valid',
                'data' => $validator->errors()
            ], 422);
        }

        // generate orderNumber
        $uniqueCode = "ORD-" . strtoupper(uniqid());

        // get user
        $user = auth('api')->user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'status' => 'Unauthorized',
            ], 401);
        }

        // get book
        $book = Book::find($request->book_id);

        // cek stok buku
        if ($book->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'status' => 'Stok buku tidak mencukupi',
            ], 400);
        }

        // hitung total harga
        $totalAmount = $book ->price * $request->quantity;
        
        // kurangi stok buku
        $book->stock -= $request->quantity;
        $book->save();

        // simpan data transaksi
        $transactions = Transaction::create([
            'order_number' => $uniqueCode,
            'customer_id' => $user->id,
            'book_id' => $request->book_id,
            'total_ammount' => $totalAmount,
        ]);

        return response()->json([
            'success' => true,
            'status' => 'Data berhasil disimpan',
            'data' => $transactions
        ], 201);
    }

    public function show(string $id)
    {
        $user = auth('api')->user();

        $transactions = Transaction::with('user', 'book')->where('id', $id)
            ->where('customer_id', $user->id)
            ->first();

        if (!$transactions) {
            return response()->json([
                'success' => false,
                'status' => 'Data tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'status' => 'Data berhasil ditampilkan',
            'data' => $transactions
        ]);
    }

    public function update (Request $request, string $id)
    {
        $transactions = Transaction::find($id);

        if (!$transactions) {
            return response()->json([
                'success' => false,
                'status' => 'Data tidak ditemukan'
            ], 404);
        }

        $transactions = Validator::make($request->all(), [
            'book_id' => 'exists:books,id',
            'quantity' => 'integer|min:1',
        ]);
    }

    public function destroy(string $id)
    {
        $transactions = Transaction::find($id);

        if (!$transactions) {
            return response()->json([
                'success' => false,
                'status' => 'Data tidak ditemukan'
            ], 404);
        }

        $transactions->delete();

        return response()->json([
            'success' => true,
            'status' => 'Data berhasil dihapus'
        ]);
    }
}
