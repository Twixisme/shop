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
                'category_id' => 1
            ],
            [
                'name' => 'IPhone 7 128GB',
                'about' => 'Современный смартфон от компании Apple',
                'price' => '650',
                'category_id' => 1
            ],
            [
                'name' => 'IPhone 7 264GB',
                'about' => 'Современный смартфон от компании Apple',
                'price' => '700',
                'category_id' => 1
            ],
            [
                'name' => 'IPhone 10 64GB',
                'about' => 'Современный смартфон от компании Apple',
                'price' => '900',
                'category_id' => 1
            ],
            [
                'name' => 'IPhone 10 128GB',
                'about' => 'Современный смартфон от компании Apple',
                'price' => '1000',
                'category_id' => 1
            ],
            [
                'name' => 'IPhone 10 264GB',
                'about' => 'Современный смартфон от компании Apple',
                'price' => '1200',
                'category_id' => 1
            ],


            [
                'name' => 'PH g6 Black',
                'about' => 'Офисный ноутбук',
                'price' => '200',
                'category_id' => 2
            ],
            [
                'name' => 'Samsung A220 White',
                'about' => 'Офисный ноутбук',
                'price' => '300',
                'category_id' => 2
            ],
            [
                'name' => 'Asus x55',
                'about' => 'Офисный ноутбук',
                'price' => '350',
                'category_id' => 2
            ],
            [
                'name' => 'Asus x55-2h',
                'about' => 'Офисный ноутбук',
                'price' => '500',
                'category_id' => 2
            ],
            [
                'name' => 'Dell u850',
                'about' => 'Офисный ноутбук',
                'price' => '350',
                'category_id' => 2
            ],[
                'name' => 'Asus j8',
                'about' => 'Игровой ноутбук',
                'price' => '750',
                'category_id' => 2
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
