<?php

namespace Database\Seeders;

use App\Models\UserLikeArticle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserLikeArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserLikeArticle::factory(10)->create();
    }
}
