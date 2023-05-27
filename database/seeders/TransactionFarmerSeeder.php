<?php

namespace Database\Seeders;
use App\Models\FarmerTransaction;
use Illuminate\Database\Seeder;

class TransactionFarmerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactionMaterial = FarmerTransaction::create([
            'user_id' => 3,
            'material_id' => 1,
            'qty' => 1000,
            'total_price' => 4000,
            'status_accept' => 'pending',
            'date' => '2023-02-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionMaterial = FarmerTransaction::create([
            'user_id' => 3,
            'material_id' => 2,
            'qty' => 1000,
            'total_price' => 5300,
            'status_accept' => 'pending',
            'date' => '2023-02-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionMaterial = FarmerTransaction::create([
            'user_id' => 3,
            'material_id' => 3,
            'qty' => 1000,
            'total_price' => 7000,
            'status_accept' => 'pending',
            'date' => '2023-02-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionMaterial = FarmerTransaction::create([
            'user_id' => 3,
            'material_id' => 3,
            'qty' => 1000,
            'total_price' => 7000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-02-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionMaterial = FarmerTransaction::create([
            'user_id' => 3,
            'material_id' => 3,
            'qty' => 1000,
            'total_price' => 7000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-02-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionMaterial = FarmerTransaction::create([
            'user_id' => 3,
            'material_id' => 3,
            'qty' => 1000,
            'total_price' => 7000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-02-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionMaterial = FarmerTransaction::create([
            'user_id' => 3,
            'material_id' => 3,
            'qty' => 1000,
            'total_price' => 7000,
            'status_accept' => 'paid',
            'prove_payment' => 'default.png',
            'date' => '2023-02-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $transactionMaterial = FarmerTransaction::create([
            'user_id' => 3,
            'material_id' => 3,
            'qty' => 6000,
            'total_price' => 42000,
            'status_accept' => 'decline',
            'date' => '2023-02-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
