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
          ['category_name' => 'カテゴリー1'],
          ['category_name' => 'カテゴリー2'],
          ['category_name' => 'カテゴリー3'],
          ['category_name' => 'カテゴリー4'],
      ]);
    }
}
