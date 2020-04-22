<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // postsテーブルにデータを挿入
      DB::table("posts")->insert([
        [
          "title" => "タイトル1",
          "content" => "内容1",
          "user_id" => 1,
          "created_at" => now(),
          "updated_at" => now()
        ],
        [
          "title" => "タイトル2",
          "content" => "内容2",
          "user_id" => 2,
          "created_at" => now(),
          "updated_at" => now()          
        ],
        [
          "title" => "タイトル3",
          "content" => "内容3",
          "user_id" => 2,
          "created_at" => now(),
          "updated_at" => now()          
        ],
      ]);
    }
}
