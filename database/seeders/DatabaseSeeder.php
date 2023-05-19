<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\TransactionFarmerSeeder;
use Database\Seeders\TransactionSellerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ReviewSeeder::class,
            TransactionFarmerSeeder::class,
            TransactionSellerSeeder::class,
            MonitoringSeeder::class,
            ProductSeeder::class,
            MaterialSeeder::class,
        ]);
    }
}
