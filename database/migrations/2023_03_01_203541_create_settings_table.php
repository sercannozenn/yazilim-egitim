<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("logo_image");
            $table->string("home_slider_image");
            $table->string("adverse_image")->nullable();
            $table->string("footer_text")->nullable();
            $table->string("footer_description")->nullable();
            $table->boolean("most_popular_status")->default(0);
            $table->boolean("recent_article_status")->default(0);
            $table->boolean("search_status")->default(0);
            $table->string("home_pages_slider_text_1")->nullable();
            $table->string("home_pages_slider_text_2")->nullable();
            $table->string("home_pages_slider_text_3")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
