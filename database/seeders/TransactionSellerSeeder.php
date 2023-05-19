<?php

namespace Database\Seeders;
use App\Models\SellerTransaction;
use Illuminate\Database\Seeder;

class TransactionSellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 2,
            'total_price' => 4000,
            'status_accept' => 'pending',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 2,
            'qty' => 2,
            'total_price' => 5300,
            'status_accept' => 'accept',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 3,
            'qty' => 2,
            'total_price' => 7000,
            'status_accept' => 'decline',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 4,
            'qty' => 2,
            'total_price' => 7000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
