<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'name' => 'Jamu Sinom',
            'description' => 'Lorem ipsum dolor sit amet quam tempor montes si. Magna montes aenean id efficitur fermentum vitae. Dapibus pulvinar hac letius si congue interdum cras lorem. Integer nascetur eros ac commodo sodales vulputate himenaeos ullamcorper porta. Odio nostra placerat accumsan curae sem massa porttitor sit duis fames. Tellus cursus etiam per fames a turpis ante.',
            'image' => 'default.png',
            'seller_id' => 3,
            'price' => '5000',
            'stock' => '50',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Jamu Beras Kencur',
            'description' => 'Lorem ipsum dolor sit amet quam tempor montes si. Magna montes aenean id efficitur fermentum vitae. Dapibus pulvinar hac letius si congue interdum cras lorem. Integer nascetur eros ac commodo sodales vulputate himenaeos ullamcorper porta. Odio nostra placerat accumsan curae sem massa porttitor sit duis fames. Tellus cursus etiam per fames a turpis ante.',
            'image' => 'default.png',
            'seller_id' => 3,
            'price' => '5500',
            'stock' => '50',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Jamu Kunir',
            'description' => 'Lorem ipsum dolor sit amet quam tempor montes si. Magna montes aenean id efficitur fermentum vitae. Dapibus pulvinar hac letius si congue interdum cras lorem. Integer nascetur eros ac commodo sodales vulputate himenaeos ullamcorper porta. Odio nostra placerat accumsan curae sem massa porttitor sit duis fames. Tellus cursus etiam per fames a turpis ante.',
            'image' => 'default.png',
            'seller_id' => 3,
            'price' => '56000',
            'stock' => '33',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
