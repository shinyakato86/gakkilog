<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          [
            'name' => '明智光秀',
            'email' => 'test1@test.co.jp',
            'password' => Hash::make('password'),
          ],
          [
            'name' => '伊達政宗',
            'email' => 'test2@test.co.jp',
            'password' => Hash::make('password'),
          ],
          [
            'name' => '上杉謙信',
            'email' => 'test3@test.co.jp',
            'password' => Hash::make('password'),
          ],
          [
            'name' => '真田幸村',
            'email' => 'test4@test.co.jp',
            'password' => Hash::make('password'),
          ],
          [
            'name' => '確認用アカウント',
            'email' => 'admin@admin.co.jp',
            'password' => Hash::make('password'),
          ],
      ]);
    }
}
