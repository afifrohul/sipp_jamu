<?php

namespace Database\Seeders;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaction = Transaction::create([
            'user_id' => 3,
            'material_id' => 1,
            'qty' => 1000,
            'total_price' => 4000,
            'status_accept' => 'pending',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transaction = Transaction::create([
            'user_id' => 3,
            'material_id' => 2,
            'qty' => 1000,
            'total_price' => 5300,
            'status_accept' => 'pending',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transaction = Transaction::create([
            'user_id' => 3,
            'material_id' => 3,
            'qty' => 1000,
            'total_price' => 7000,
            'status_accept' => 'pending',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transaction = Transaction::create([
            'user_id' => 3,
            'material_id' => 3,
            'qty' => 1000,
            'total_price' => 7000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transaction = Transaction::create([
            'user_id' => 3,
            'material_id' => 3,
            'qty' => 1000,
            'total_price' => 7000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transaction = Transaction::create([
            'user_id' => 3,
            'material_id' => 3,
            'qty' => 1000,
            'total_price' => 7000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transaction = Transaction::create([
            'user_id' => 3,
            'material_id' => 3,
            'qty' => 1000,
            'total_price' => 7000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transaction = Transaction::create([
            'user_id' => 3,
            'material_id' => 3,
            'qty' => 6000,
            'total_price' => 42000,
            'status_accept' => 'decline',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
