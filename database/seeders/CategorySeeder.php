<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
          ['category_name' => 'ギター'],
          ['category_name' => 'ベース'],
          ['category_name' => 'ドラム'],
          ['category_name' => '鍵盤楽器'],
      ]);
    }
}
