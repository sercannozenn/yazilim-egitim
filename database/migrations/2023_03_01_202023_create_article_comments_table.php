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
        Schema::create('article_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("parent_id")->nullable();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("article_id");
            $table->text("comment");
            $table->tinyInteger("status")->default(0);
            $table->integer("like_count")->default(0);
            $table->integer("unlike_count")->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign("parent_id")->references("id")->on("article_comments");
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("article_id")->references("id")->on("articles");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_comments');
    }
};
