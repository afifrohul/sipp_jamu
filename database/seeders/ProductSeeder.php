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
            'description' => 'Setiap tegukan Jamu Sinom memadukan harmoni rasa segar, manis asam, dan sedikit pedas yang menyegarkan lidah Anda. Diproduksi dengan hati-hati, minuman ini menggunakan bahan-bahan berkualitas tinggi seperti air kelapa segar, air asam jawa murni, gula aren organik, dan rempah-rempah pilihan seperti jahe, kunyit, dan daun pandan. Jamu Sinom tidak hanya lezat, tetapi juga memiliki manfaat kesehatan yang luar biasa. Kombinasi unik bahan alami ini memberikan kandungan antioksidan yang tinggi, vitamin, dan sifat antiinflamasi yang dapat mendukung sistem kekebalan tubuh Anda. Rasakan energi baru dan kesejahteraan dengan setiap tegukan segar dari Jamu Sinom. Kemasan praktis dan modern membuat Jamu Sinom menjadi teman setia dalam menjaga kesehatan sehari-hari. Tersedia dalam botol yang mudah dibawa dan siap minum, Anda dapat menikmatinya di mana pun dan kapan pun Anda mau. Nikmati Jamu Sinom dalam keadaan dingin atau tambahkan es untuk sensasi penyegaran yang maksimal',
            'image' => '10-47-10wToLIsinom-4cc13c1.webp',
            'seller_id' => 3,
            'price' => '5000',
            'stock' => '50',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Jamu Beras Kencur',
            'description' => 'Produk ini terbuat dari campuran beras, kencur, jahe, gula merah, dan rempah-rempah lainnya yang diproses secara tradisional. Setiap tegukan Jamu Beras Kencur menghadirkan kombinasi rasa harum, pedas, dan segar yang membangkitkan selera Anda. Bahan-bahan alami yang digunakan, seperti beras dan kencur, mengandung zat antioksidan, serat, dan senyawa aktif lainnya yang bermanfaat bagi kesehatan tubuh. Jamu Beras Kencur telah dikenal sejak lama sebagai minuman yang membantu meredakan masuk angin, menghangatkan tubuh, dan meningkatkan pencernaan. Selain itu, kandungan jahe dan kencur di dalamnya juga dapat memberikan efek penyegaran, meningkatkan energi, dan membantu mengatasi rasa mual. Kemasan praktis dan modern membuat Jamu Beras Kencur mudah dinikmati di mana saja. Tersedia dalam botol yang mudah dibawa dan siap minum, Anda dapat menikmati manfaat kesehatan dari minuman ini dengan cepat dan praktis. Jamu Beras Kencur adalah produk yang menggabungkan kekayaan tradisi dengan kebutuhan gaya hidup modern. Dapatkan manfaat alami dari campuran beras dan kencur yang telah teruji selama berabad-abad, dan jadikan minuman ini sebagai pilihan kesehatan yang menyegarkan dalam rutinitas sehari-hari Anda.',
            'image' => '10-47-40sOR3wimages.jfif',
            'seller_id' => 3,
            'price' => '5500',
            'stock' => '50',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Jamu Temulawak',
            'description' => 'Jamu Temulawak adalah minuman kesehatan yang terinspirasi oleh warisan tradisional Indonesia. Produk ini menggunakan bahan utama temulawak, tumbuhan herbal yang telah lama dikenal karena manfaatnya dalam menjaga kesehatan. Setiap tegukan Jamu Temulawak menghadirkan rasa pahit yang khas dengan sentuhan hangat. Dengan kandungan alami temulawak yang kaya akan senyawa aktif seperti kurkumin dan zat antioksidan, minuman ini dapat membantu meningkatkan pencernaan, meredakan gangguan lambung, dan mengurangi gejala peradangan. Jamu Temulawak juga memiliki sifat detoksifikasi yang dapat membantu membersihkan tubuh dari racun dan meningkatkan fungsi hati. Selain itu, minuman ini diketahui memiliki manfaat untuk menjaga kesehatan kulit, meningkatkan sistem kekebalan tubuh, dan memberikan energi. Kemasan modern dan praktis membuat Jamu Temulawak mudah dinikmati dalam gaya hidup sehari-hari.',
            'image' => '01-57-35rWMosdaftar-8-manfaat-temulawak-untuk-kesehatan-tubuh-cegah-penyakit-kanker-jantung-dan-obat-maag.jpg',
            'seller_id' => 3,
            'price' => '56000',
            'stock' => '33',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
