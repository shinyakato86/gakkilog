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
          [
            'id' => '1',
            'category_name' => 'ギター'
          ],
          [
            'id' => '2',
            'category_name' => 'ベース'
          ],
          [
            'id' => '3',
            'category_name' => 'ドラム'
          ],
          [
            'id' => '4',
            'category_name' => '鍵盤楽器'],
      ]);
    }
}
