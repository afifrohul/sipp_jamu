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
            'date' => '2023-01-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 2,
            'total_price' => 4000,
            'status_accept' => 'cancel',
            'date' => '2023-01-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 2,
            'qty' => 2,
            'total_price' => 5300,
            'status_accept' => 'accept',
            'prove_payment' => 'default.png',
            'date' => '2023-01-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 2,
            'qty' => 2,
            'total_price' => 5800,
            'status_accept' => 'accept',
            'date' => '2023-01-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 2,
            'qty' => 2,
            'total_price' => 10000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-01-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 2,
            'qty' => 2,
            'total_price' => 12000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-01-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 3,
            'qty' => 2,
            'total_price' => 7000,
            'status_accept' => 'decline',
            'date' => '2023-02-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 3,
            'qty' => 2,
            'total_price' => 7000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-02-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 2,
            'total_price' => 17000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-02-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 2,
            'total_price' => 7000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-03-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 2,
            'qty' => 2,
            'total_price' => 13000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-03-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 2,
            'total_price' => 7000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-04-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 2,
            'qty' => 2,
            'total_price' => 23000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-04-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 2,
            'total_price' => 79000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-04-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 3,
            'qty' => 2,
            'total_price' => 13000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-05-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 4,
            'total_price' => 33000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-05-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 2,
            'qty' => 2,
            'total_price' => 11000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-06-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 4,
            'total_price' => 22000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-06-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 2,
            'total_price' => 11000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-07-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 3,
            'qty' => 4,
            'total_price' => 22000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-07-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 2,
            'total_price' => 11000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-08-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 3,
            'qty' => 4,
            'total_price' => 22000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-08-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 2,
            'total_price' => 31000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-09-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 2,
            'qty' => 4,
            'total_price' => 12000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-09-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 2,
            'total_price' => 4000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-10-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 2,
            'qty' => 4,
            'total_price' => 2000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-10-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 4,
            'qty' => 2,
            'total_price' => 4000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-11-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 2,
            'qty' => 4,
            'total_price' => 44000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-11-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 1,
            'qty' => 2,
            'total_price' => 22000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-12-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionProduct = SellerTransaction::create([
            'user_id' => 4,
            'product_id' => 2,
            'qty' => 4,
            'total_price' => 12000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-12-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
