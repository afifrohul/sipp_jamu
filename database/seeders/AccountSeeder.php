<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = User::create([
        'name' => 'admin01',
        'email' => 'admin01@gmail.com',
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
