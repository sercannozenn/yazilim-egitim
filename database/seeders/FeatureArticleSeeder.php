<?php

namespace Database\Seeders;

use App\Models\FeatureArticle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeatureArticle::factory(10)->create();
    }
}
