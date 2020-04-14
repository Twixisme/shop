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
            ['name' => 'Мобильные телефоны', 'code' => 'mobile', ],
            ['name' => 'Компьютеры', 'code' => 'computer', ],
            ['name' => 'Аксессуары', 'code' => 'accessors', ],
            ['name' => 'Бытовая техника', 'code' => 'tech', ],
            ['name' => 'Для отдыха', 'code' => 'for_chill', ],
        ]);
    }
}
