<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert([
          [
            'id' => '1',
            'user_id' => '1',
            'category_id' => '1',
            'detail_name' => 'CUSTOM SHOP Historic Collection 2020 Les Paul Special Single Cut VOS Cherry Sunburst',
            'detail_maker' => 'Cibson',
            'detail_detail' => '絶対的な人気を誇るレスポールタイプエレキギターです。
            パワフルな音色がロックシーンにおいて活躍するスタンダードなモデルです。',
            'detail_comment' => 'このレスポールは、迷う事なくおすすめです。このギターはボディが軽く、他のレスポールと比べると使いやすいです。また、正確で仕上げの良いフレット付きのネックと、整合されたボディによる太い音がし鳴ります。パーツの品質も大変良いです。初心者から中級者までに使って欲しいギターだと思います。',
            'detail_img' => 'post1.jpg',
            'created_at' => '2021-05-08 11:57:49',
            'updated_at' => '2021-05-08 11:57:49',
          ],
          [
            'id' => '2',
            'user_id' => '2',
            'category_id' => '2',
            'detail_name' => 'American Professional II Jazz Bass V',
            'detail_maker' => 'PENDER',
            'detail_detail' => '体にフィットするオリジナル形状のコンパクトなボディで、それぞれキャラクターが異なる、PタイプとJタイプのピックアップを2基搭載。',
            'detail_comment' => 'ノイズも少なく演奏しやすいエレキベースです。ネックも握りやすく、あとオリジナルのパーツを使ってあるのもとても良いです。5弦ベースをこれから始める人にはおすすめです！',
            'detail_img' => 'post2.jpg',
            'created_at' => '2021-05-08 11:56:49',
            'updated_at' => '2021-05-08 11:57:49',
          ],
          [
            'id' => '3',
            'user_id' => '3',
            'category_id' => '3',
            'detail_name' => 'ROADSHOW RS964SCWN/C',
            'detail_maker' => 'fearl',
            'detail_detail' => 'ビギナー向けのコンパクトドラムセットです。リーズナブルな価格ですが、一部に上級モデルの機能を投入することによって操作性と耐久性が向上しています。',
            'detail_comment' => '初めてのドラムとして購入しました。作りも問題なく、音も良く大変使いやすいです。パワフルな音を出すこともできるので、大変気に入りました。',
            'detail_img' => 'post3.jpg',
            'created_at' => '2021-05-08 11:55:49',
            'updated_at' => '2021-05-08 11:57:49',
          ],
          [
            'id' => '4',
            'user_id' => '4',
            'category_id' => '4',
            'detail_name' => 'キーボード CT-X3000 [61鍵盤]',
            'detail_maker' => 'cosio',
            'detail_detail' => 'グランドピアノやストリングスなどのアコースティック楽器からエレクトリックサウンドに至るまで、ダイナミックな音色変化による優れた表現力があります。',
            'detail_comment' => '音質は非常に良いし鍵盤のタッチも素晴らしいです。細かい強弱の弾き方にも反応し、ヘッドホン等もつければ家でも練習できます。',
            'detail_img' => 'post4.jpg',
            'created_at' => '2021-05-08 11:54:49',
            'updated_at' => '2021-05-08 11:57:49',
          ],
      ]);
    }
}
