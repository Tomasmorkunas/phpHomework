<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new Article())->insert([
            [
                'title' => Lorem::sentence(15),
                'content' => Lorem::text(),
                'date' => now(),
                'address' => Lorem::sentence(15)
            ]
        ]);
    }
}
