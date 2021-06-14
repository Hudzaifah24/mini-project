<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
// use App\Models\Category;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Article::truncate();

        Article::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Article1',
            'content' => 'Article1',
            'image' => 'kosong'
        ]);

        Article::create([
            'user_id' => 2,
            'category_id' => 2,
            'title' => 'Article2',
            'content' => 'Article2',
            'image' => 'kosong'
        ]);

    }
}
