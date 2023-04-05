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
        'description' => 'Lorem ipsum dolor sit amet quam tempor montes si. Magna montes aenean id efficitur fermentum vitae. Dapibus pulvinar hac letius si congue interdum cras lorem. Integer nascetur eros ac commodo sodales vulputate himenaeos ullamcorper porta. Odio nostra placerat accumsan curae sem massa porttitor sit duis fames. Tellus cursus etiam per fames a turpis ante.',
        'image' => 'default.png',
        'email' => 'adminafif01@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('admin01'),
        'remember_token' => \Str::random(60),
        'created_at' => now(),
        'updated_at' => now()
      ]);
      event(new Registered($admin));
      $admin->assignRole('admin');
      
      $petani = User::create([
        'name' => 'petaniafif01',
        'description' => 'Lorem ipsum dolor sit amet quam tempor montes si. Magna montes aenean id efficitur fermentum vitae. Dapibus pulvinar hac letius si congue interdum cras lorem. Integer nascetur eros ac commodo sodales vulputate himenaeos ullamcorper porta. Odio nostra placerat accumsan curae sem massa porttitor sit duis fames. Tellus cursus etiam per fames a turpis ante.',
        'image' => 'default.png',
        'email' => 'petaniafif01@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('petani01'),
        'remember_token' => \Str::random(60),
        'created_at' => now(),
        'updated_at' => now()
      ]);
      event(new Registered($petani));
      $petani->assignRole('petani');
      
      $penjual = User::create([
        'name' => 'penjualafif01',
        'description' => 'Lorem ipsum dolor sit amet quam tempor montes si. Magna montes aenean id efficitur fermentum vitae. Dapibus pulvinar hac letius si congue interdum cras lorem. Integer nascetur eros ac commodo sodales vulputate himenaeos ullamcorper porta. Odio nostra placerat accumsan curae sem massa porttitor sit duis fames. Tellus cursus etiam per fames a turpis ante.',
        'image' => 'default.png',
        'email' => 'penjualafif01@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('penjual01'),
        'remember_token' => \Str::random(60),
        'created_at' => now(),
        'updated_at' => now()
      ]);
      event(new Registered($penjual));
      $penjual->assignRole('penjual');
      
      $customer = User::create([
        'name' => 'customerafif01',
        'description' => 'Lorem ipsum dolor sit amet quam tempor montes si. Magna montes aenean id efficitur fermentum vitae. Dapibus pulvinar hac letius si congue interdum cras lorem. Integer nascetur eros ac commodo sodales vulputate himenaeos ullamcorper porta. Odio nostra placerat accumsan curae sem massa porttitor sit duis fames. Tellus cursus etiam per fames a turpis ante.',
        'image' => 'default.png',
        'email' => 'customerafif01@gmail.com',
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
