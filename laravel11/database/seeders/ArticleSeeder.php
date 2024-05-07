<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => $title = 'My First Article',
            'slug' => str($title)->slug(),
            'body' =>  $body = 'This is the body fo my first article',
            'thumbnail' => 'https://via.placeholder.com/300',
            'teaser' => $teaser = str($body)->limit(160),
            'meta_title' => $title,
            'meta_description' => $teaser,

        ]);
    }
}
