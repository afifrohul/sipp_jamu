<?php

namespace Database\Seeders;
use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $material = Material::create([
            'name' => 'Daun Asam',
            'description' => 'Lorem ipsum dolor sit amet quam tempor montes si. Magna montes aenean id efficitur fermentum vitae. Dapibus pulvinar hac letius si congue interdum cras lorem. Integer nascetur eros ac commodo sodales vulputate himenaeos ullamcorper porta. Odio nostra placerat accumsan curae sem massa porttitor sit duis fames. Tellus cursus etiam per fames a turpis ante.',
            'image' => 'default.png',
            'user_id' => 2,
            'price' => '4000',
            'stock' => '5500',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $material = Material::create([
            'name' => 'Beras Kencur',
            'description' => 'Lorem ipsum dolor sit amet quam tempor montes si. Magna montes aenean id efficitur fermentum vitae. Dapibus pulvinar hac letius si congue interdum cras lorem. Integer nascetur eros ac commodo sodales vulputate himenaeos ullamcorper porta. Odio nostra placerat accumsan curae sem massa porttitor sit duis fames. Tellus cursus etiam per fames a turpis ante.',
            'image' => 'default.png',
            'user_id' => 2,
            'price' => '5300',
            'stock' => '5000',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $material = Material::create([
            'name' => 'Kunir',
            'description' => 'Lorem ipsum dolor sit amet quam tempor montes si. Magna montes aenean id efficitur fermentum vitae. Dapibus pulvinar hac letius si congue interdum cras lorem. Integer nascetur eros ac commodo sodales vulputate himenaeos ullamcorper porta. Odio nostra placerat accumsan curae sem massa porttitor sit duis fames. Tellus cursus etiam per fames a turpis ante.',
            'image' => 'default.png',
            'user_id' => 2,
            'price' => '7000',
            'stock' => '5400',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $material = Material::create([
            'name' => 'Kunir',
            'description' => 'Lorem ipsum dolor sit amet quam tempor montes si. Magna montes aenean id efficitur fermentum vitae. Dapibus pulvinar hac letius si congue interdum cras lorem. Integer nascetur eros ac commodo sodales vulputate himenaeos ullamcorper porta. Odio nostra placerat accumsan curae sem massa porttitor sit duis fames. Tellus cursus etiam per fames a turpis ante.',
            'image' => 'default.png',
            'user_id' => 3,
            'stock' => '500',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
