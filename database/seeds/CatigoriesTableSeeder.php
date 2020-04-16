<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatigoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Мобильные телефоны',
                'code' => 'mobile',
                'logo' => 'categories/tiGp4zLWp26C347N4yjhOnI8X1ps2jjKJYptNNa2.jpeg'
            ],
            [
                'name' => 'Компьютеры',
                'code' => 'computer',
                'logo' => 'categories/M0KhnLD9SNTxMQX6yobLy0VZZpKEzhd63Fvd2ifd.jpeg'
            ],
            [
                'name' => 'Аксессуары',
                'code' => 'accessors',
                'logo' => 'categories/oiA9Bz98pPqMAazqrGnNQAkjTkIZuo26XKZrePly.jpeg'
            ],
            [
                'name' => 'Бытовая техника',
                'code' => 'tech',
                'logo' => 'categories/m27LH5EHYiJd9iEa1Chjqt5DLnO5wo2BEC6xVT8W.jpeg'
            ],
            [
                'name' => 'Для отдыха',
                'code' => 'for_chill',
                'logo' => 'categories/7AJtMzfnQrRY4PQ2UIVCmJ5hF0QNP25J9vSrK3iG.jpeg'
            ],
        ]);
    }
}
