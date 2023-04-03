<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Auth\Events\Registered;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = User::create([
        'name' => 'adminafif01',
        'email' => 'afifmemyself22@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('admin01'),
        'remember_token' => \Str::random(60),
        'created_at' => now(),
        'updated_at' => now()
      ]);
      event(new Registered($admin));
      $admin->assignRole('admin');
      
      $petani = User::create([
        'name' => 'petani01',
        'email' => 'petani01@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('petani01'),
        'remember_token' => \Str::random(60),
        'created_at' => now(),
        'updated_at' => now()
      ]);
      event(new Registered($petani));
      $petani->assignRole('petani');
      
      $penjual = User::create([
        'name' => 'penjual01',
        'email' => 'penjual01@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('penjual01'),
        'remember_token' => \Str::random(60),
        'created_at' => now(),
        'updated_at' => now()
      ]);
      event(new Registered($penjual));
      $penjual->assignRole('penjual');
      
      $customer = User::create([
        'name' => 'customer01',
        'email' => 'customer01@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('customer01'),
        'remember_token' => \Str::random(60),
        'created_at' => now(),
        'updated_at' => now()
      ]);
      event(new Registered($customer));
      $customer->assignRole('customer');
    }
}
