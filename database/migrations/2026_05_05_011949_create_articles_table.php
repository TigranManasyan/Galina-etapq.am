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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('cover_photo')->nullable();
            $table->string('title_hy');
            $table->string('title_en');
            $table->string('slug')->unique();
            $table->text('body_hy');
            $table->text('body_en');
            $table->boolean('published')->default(true);
            $table->date('published_at')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->string('more_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
