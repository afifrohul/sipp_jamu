<?php

namespace Database\Seeders;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = Review::create([
            'customer_id' => 4,
            'product_id' => 1,
            'comment' => 'Rasanya enak banget,,anak saya sampai nambah terus,,meningkatkan nafsu makan,,setelah mengkonsumsi jamu beras kencur ini bb anak saya cepat bertambah,,terima kasih seller',
            'rating' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $review = Review::create([
            'customer_id' => 4,
            'product_id' => 2,
            'comment' => 'Beli lagi karena rasanya enak dan menyegarkan. Seller beneran gercep dan pengemasan produk sangat rapi. Pengiriman juga cepat. Pokoknya recommended banget.',
            'rating' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $review = Review::create([
            'customer_id' => 4,
            'product_id' => 3,
            'comment' => 'Terimakasih kak..sudah sampai paketnya..nyoba ikhtiar dengan jamu tradisional buat nyembuhin penyakit liver bapak saya..semoga cocok..kalo cocok insyaAllah repeat order lagi',
            'rating' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $review = Review::create([
            'customer_id' => 4,
            'product_id' => 3,
            'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam saepe cumque alias.',
            'rating' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $review = Review::create([
            'customer_id' => 4,
            'product_id' => 1,
            'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam saepe cumque alias.',
            'rating' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $review = Review::create([
            'customer_id' => 4,
            'product_id' => 2,
            'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam saepe cumque alias.',
            'rating' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
