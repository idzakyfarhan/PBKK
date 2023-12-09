<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string("author")->nullable();
            $table->string("title")->nullable();
            $table->text("description")->nullable();
            $table->string("url")->nullable();
            $table->string("urlToImage")->nullable();
            $table->string("publishedAt")->nullable();
            $table->text("content")->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
