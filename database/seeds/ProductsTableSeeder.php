<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'IPhone 7 64GB',
                'about' => 'Современный смартфон от компании Apple',
                'price' => '500',
                'category_id' => 1,
                'image' => 'products/F8jEHsDQLy1hNw0U3cGQXopmQu04mbDuHHcyIzQj.jpeg',
            ],
            [
                'name' => 'IPhone 7 128GB',
                'about' => 'Современный смартфон от компании Apple',
                'price' => '650',
                'category_id' => 1,
                'image' => 'products/iLKYHCzH5ulElkK3r5ooYQVv7AqpPVugajbOyU9K.jpeg',
            ],
            [
                'name' => 'IPhone 7 264GB',
                'about' => 'Современный смартфон от компании Apple',
                'price' => '700',
                'category_id' => 1,
                'image' => 'products/TzfzeedA2C8UROULHBmbCRCOaHjN5EyhS6BY8Gg7.jpeg'
            ],
            [
                'name' => 'IPhone 10 64GB',
                'about' => 'Современный смартфон от компании Apple',
                'price' => '900',
                'category_id' => 1,
                'image' => 'products/KAg57zGX0gb3HTZWceDHPMAKgOdi8zG2MyHsoHU4.jpeg'
            ],
            [
                'name' => 'IPhone 10 128GB',
                'about' => 'Современный смартфон от компании Apple',
                'price' => '1000',
                'category_id' => 1,
                'image' => 'products/qF8UkLc9ZqcsTpWiglBzmgMboS7HXMeOubXO7mxe.jpeg'
            ],
            [
                'name' => 'IPhone 10 264GB',
                'about' => 'Современный смартфон от компании Apple',
                'price' => '1200',
                'category_id' => 1,
                'image' => 'products/8laZjnFB8cVARe1Hb6wz4iH2jHIeS6VjGRP2ZR2y.jpeg'
            ],


            [
                'name' => 'PH g6 Black',
                'about' => 'Офисный ноутбук',
                'price' => '200',
                'category_id' => 2,
                'image' => 'products/0PmBMjMAJAk5c4t7hRz2sWoAXvFIE1AAf9cHW9cR.jpeg'
            ],
            [
                'name' => 'Samsung A220 White',
                'about' => 'Офисный ноутбук',
                'price' => '300',
                'category_id' => 2,
                'image' => 'products/5Jn3YebAguOodzG9jPqpg4fzu4wLpwi9jyqOWYqE.jpeg'
            ],
            [
                'name' => 'Asus x55',
                'about' => 'Офисный ноутбук',
                'price' => '350',
                'category_id' => 2,
                'image' => 'products/zCLIn5CgEsnwW88unSdoUcnMNRBKSgIioe78hgFV.jpeg'
            ],
            [
                'name' => 'Asus x55-2h',
                'about' => 'Офисный ноутбук',
                'price' => '500',
                'category_id' => 2,
                'image' => 'products/sDie6AEKHDnDtelunrKuyDFuZ4v0raL967ZMH9Ad.jpeg'
            ],
            [
                'name' => 'Dell u850',
                'about' => 'Офисный ноутбук',
                'price' => '350',
                'category_id' => 2,
                'image' => 'products/tgYQB8KSBaVGeV6tKLJadSZ4Pw47rHS9gpqkWKeZ.jpeg'
            ],[
                'name' => 'Asus j8',
                'about' => 'Игровой ноутбук',
                'price' => '750',
                'category_id' => 2,
                'image' => 'products/vjpnwXcPc4o5O11aPaiCP9hVPCdTkoAPTvZ1IqZL.jpeg'
            ],

            [
                'name' => 'Panasonic J118',
                'about' => 'Наушники',
                'price' => '20',
                'category_id' => 3
            ],
            [
                'name' => 'Panasonic J218',
                'about' => 'Наушники',
                'price' => '25',
                'category_id' => 3
            ],
            [
                'name' => 'Sven x10',
                'about' => 'Наушники',
                'price' => '15',
                'category_id' => 3
            ],
            [
                'name' => 'Blast 2000',
                'about' => 'Наушники',
                'price' => '1000',
                'category_id' => 3
            ],
            [
                'name' => 'AirPods 2',
                'about' => 'Наушники',
                'price' => '200',
                'category_id' => 3
            ],
            [
                'name' => 'Aiprods Pro',
                'about' => 'Наушники',
                'price' => '499',
                'category_id' => 3
            ],

            [
                'name' => 'Samsung',
                'about' => 'Морозильная камера',
                'price' => '50',
                'category_id' => 4
            ],
            [
                'name' => 'Pioner chisto100',
                'about' => 'Стиральная машина',
                'price' => '1199',
                'category_id' => 4
            ],
            [
                'name' => 'Pioner',
                'about' => 'Холодильник',
                'price' => '799',
                'category_id' => 4
            ],
            [
                'name' => 'Calgon',
                'about' => 'Утюг',
                'price' => '199',
                'category_id' => 4
            ],
            [
                'name' => 'Pioner pro1000',
                'about' => 'Холодильник',
                'price' => '599',
                'category_id' => 4
            ],
            [
                'name' => 'Pioner s210',
                'about' => 'Холодильник',
                'price' => '299',
                'category_id' => 4
            ],

            [
                'name' => 'Ukraina',
                'about' => 'Велосипед',
                'price' => '100000',
                'category_id' => 5
            ],
            [
                'name' => 'SpeedVel',
                'about' => 'Велосипед',
                'price' => '100',
                'category_id' => 5
            ],
            [
                'name' => 'FirBlast',
                'about' => 'Мечта школьника',
                'price' => '300',
                'category_id' => 5
            ],
            [
                'name' => 'JetPack',
                'about' => 'Квадракоптер',
                'price' => '1000',
                'category_id' => 5
            ],
            [
                'name' => 'Laser',
                'about' => 'Веселые фонарики для котов',
                'price' => '10',
                'category_id' => 5
            ],
            [
                'name' => 'JBl',
                'about' => 'Музыкальная аккустика',
                'price' => '200',
                'category_id' => 5
            ],
        ]);
    }
}
