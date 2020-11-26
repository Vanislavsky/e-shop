<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'iPhone X 64GB',
                'code' => 'iphone_x_64',
                'description' => 'Отличный продвинутый телефон с памятью на 64 gb',
                'price' => '71990',
                'category_id' => 1,
                'image' => 'images/products/iphone_x.jpg',
        ]);

        Product::create([
            'name' => 'iPhone X 256GB',
                'code' => 'iphone_x_256',
                'description' => 'Отличный продвинутый телефон с памятью на 256 gb',
                'price' => '89990',
                'category_id' => 1,
                'image' => 'images/products/iphone_x_silver.jpg',
        ]);

        Product::create([
            'name' => 'HTC One S',
            'code' => 'htc_one_s',
            'description' => 'Зачем платить за лишнее? Легендарный HTC One S',
            'price' => '12490',
            'category_id' => 1,
            'image' => 'images/products/htc_one_s.png',
        ]);

        Product::create([
            'name' => 'iPhone 5SE',
            'code' => 'iphone_5se',
            'description' => 'Отличный классический iPhone',
            'price' => '17221',
            'category_id' => 1,
            'image' => 'images/products/iphone_5.jpg',
        ]);

        Product::create([
            'name' => 'Наушники Beats Audio',
                'code' => 'beats_audio',
                'description' => 'Отличный звук от Dr. Dre',
                'price' => '20221',
                'category_id' => 2,
                'image' => 'images/products/beats.jpg',
        ]);

        Product::create([
            'name' => 'Камера GoPro',
                'code' => 'gopro',
                'description' => 'Снимай самые яркие моменты с помощью этой камеры',
                'price' => '12000',
                'category_id' => 2,
                'image' => 'images/products/gopro.jpg',
        ]);

        Product::create([
            'name' => 'Камера Panasonic HC-V770',
                'code' => 'panasonic_hc-v770',
                'description' => 'Для серьёзной видео съемки нужна серьёзная камера. Panasonic HC-V770 для этих целей лучший выбор!',
                'price' => '27900',
                'category_id' => 2,
                'image' => 'images/products/video_panasonic.jpg',
        ]);

        Product::create([
            'name' => 'Кофемашина DeLongi',
                'code' => 'delongi',
                'description' => 'Хорошее утро начинается с хорошего кофе!',
                'price' => '25200',
                'category_id' => 3,
                'image' => 'images/products/delongi.jpg',
        ]);

        Product::create([
            'name' => 'Холодильник Haier',
                'code' => 'haier',
                'description' => 'Для большой семьи большой холодильник!',
                'price' => '40200',
                'category_id' => 3,
                'image' => 'images/products/haier.jpg',
        ]);

        Product::create([
            'name' => 'Блендер Moulinex',
                'code' => 'moulinex',
                'description' => 'Для самых смелых идей',
                'price' => '4200',
                'category_id' => 3,
                'image' => 'images/products/moulinex.jpg',
        ]);

        Product::create([
            'name' => 'Мясорубка Bosch',
                'code' => 'bosch',
                'description' => 'Любите домашние котлеты? Вам определенно стоит посмотреть на эту мясорубку!',
                'price' => '9200',
                'category_id' => 3,
                'image' => 'images/products/bosch.jpg',
        ]);
    }
}
