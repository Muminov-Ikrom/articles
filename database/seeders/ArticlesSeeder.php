<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'created_date' => '11.12.2022',
            'auther'=>'admin',
            'article_text'=>'article text ',
            'spelling'=>'spelling - imlo',
        ]);
    }
}
