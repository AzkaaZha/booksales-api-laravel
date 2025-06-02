<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::insert([
            [
                'order_number' => 'ORD-0001',
                'customer_id' => 2,
                'book_id' => 1,
                'total_ammount' => 250000.00,
            ],
            [
                'order_number' => 'ORD-0002',
                'customer_id' => 1,
                'book_id' => 2,
                'total_ammount' => 500000.00,
            ]
            
        ]);
    }
}
